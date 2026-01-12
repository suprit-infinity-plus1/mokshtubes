@extends('layouts.master')
@section('title', 'Pre Whatsapp Page')
@section('extracss')
    <style>
        .wa-intent-section-01 {
            background: #f5f5f5;
            padding: 40px 16px;
        }

        .wa-intent-wrapper-01 {
            max-width: 420px;
            margin: 0 auto;
        }

        .wa-intent-box-01 {
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .wa-intent-title-01 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 8px;
            color: #222;
        }

        .wa-intent-subtitle-01 {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 16px;
        }

        .wa-intent-textarea-01 {
            width: 100%;
            min-height: 120px;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            resize: none;
            box-sizing: border-box;
        }

        .wa-intent-textarea-01:focus {
            outline: none;
            border-color: #25D366;
        }

        .wa-intent-btn-01 {
            width: 100%;
            margin-top: 16px;
            padding: 14px;
            background: #25D366;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .wa-intent-btn-01:hover {
            background: #1ebe5d;
        }

        .wa-intent-note-01 {
            margin-top: 10px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <section id="wa-intent-section-01" class="wa-intent-section-01">
        <div id="wa-intent-wrapper-01" class="wa-intent-wrapper-01">
            <div id="wa-intent-box-01" class="wa-intent-box-01">

                <h2 id="wa-intent-title-01" class="wa-intent-title-01">
                    Please describe your concern
                </h2>

                <p id="wa-intent-subtitle-01" class="wa-intent-subtitle-01">
                    This message will be sent to WhatsApp
                </p>

                <textarea id="wa-intent-textarea-01" class="wa-intent-textarea-01" placeholder="Type your concern here..." required></textarea>

                <button id="wa-intent-btn-01" class="wa-intent-btn-01" onclick="waIntentNext01()">
                    Continue to WhatsApp
                </button>

                <div id="wa-intent-note-01" class="wa-intent-note-01">
                    You will be redirected to WhatsApp
                </div>

            </div>
        </div>
    </section>

@endsection
@section('extrajs')
    <script>
        function waIntentNext01() {
            const msg = document.getElementById('wa-intent-textarea-01').value.trim();

            if (msg.length < 10) {
                alert('Please describe your concern in a little more detail.');
                return;
            }

            console.log('User intent message:', msg);

            // NEXT STEP:
            // 1. Send msg to backend
            // 2. Save to DB
            // 3. Redirect to wa.me with encoded msg
        }

        function waIntentNext01() {
            const textarea = document.getElementById('wa-intent-textarea-01');
            const message = textarea.value.trim();

            // Basic validation
            if (message.length < 10) {
                alert('Please describe your concern in a little more detail.');
                return;
            }

            // OPTIONAL: add prefix so client knows source
            const finalMessage = bmessage;

            // Encode message for URL
            const encodedMessage = encodeURIComponent(finalMessage);

            // WhatsApp number (no +, no spaces)
            const phoneNumber = "919870306295"; // CHANGE THIS

            // Redirect to WhatsApp
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

            window.location.href = whatsappURL;
        }
    </script>

@endsection
