<?php

// app/Helpers/helpers.php

if (! function_exists('html_limit')) {
    /**
     * Truncate HTML content to $limit characters of text while preserving tags
     * and closing any open tags. Returns the truncated HTML (no extra wrapping <p>).
     */
    function html_limit(string $html, int $limit = 120, string $ending = '...'): string
    {
        // quick return if nothing to do
        if (mb_strlen(strip_tags($html)) <= $limit) {
            return $html;
        }

        libxml_use_internal_errors(true);

        $doc = new \DOMDocument;
        // ensure proper charset handling
        $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $total = 0;

        $walker = function (\DOMNode $node) use (&$walker, &$total, $limit) {
            $out = '';

            foreach ($node->childNodes as $child) {
                if ($total >= $limit) {
                    break;
                }

                if ($child->nodeType === XML_TEXT_NODE) {
                    $text = $child->nodeValue;
                    $remaining = $limit - $total;

                    if (mb_strlen($text) > $remaining) {
                        $trunc = mb_substr($text, 0, $remaining);
                        // escape text nodes
                        $out .= htmlspecialchars($trunc, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                        $total = $limit;
                        break;
                    } else {
                        $out .= htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
                        $total += mb_strlen($text);
                    }
                } elseif ($child->nodeType === XML_ELEMENT_NODE) {
                    $tag = $child->nodeName;

                    // start tag
                    $out .= '<'.$tag;

                    // attributes
                    if ($child->attributes->length) {
                        foreach ($child->attributes as $attr) {
                            $out .= ' '.$attr->nodeName.'="'.htmlspecialchars($attr->nodeValue, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'"';
                        }
                    }

                    $out .= '>';

                    // recurse into children
                    $out .= $walker($child);

                    // close tag
                    $out .= '</'.$tag.'>';
                }
                // other node types ignored
            }

            return $out;
        };

        $result = $walker($doc);

        libxml_clear_errors();

        // append ending if truncated
        if ($total >= $limit) {
            $result .= $ending;
        }

        return $result;
    }
}
