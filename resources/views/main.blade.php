<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- header-->
    @include('partials.header')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Starter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <style>
        :root {
            --maroon: #a3174f;
            --maroon-dark: #8a1442;
            --teal: #4fd1b5;
            --gold: #f2b134;
            --ink: #2f3a6b;
            --white: #ffffff;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        html, body { height: 100%; }

        body {
            font-family: 'Poppins', system-ui, sans-serif;
            color: var(--ink);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: var(--white);
        }

        /* ---------- Top bar ---------- */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 28px;
            background: var(--white);
        }
        .topbar .brand { font-size: 28px; font-weight: 800; color: var(--maroon); letter-spacing: -1px; }
        .topbar .product { font-size: 22px; font-weight: 700; color: var(--ink); }
        .topbar .product small { display: block; font-size: 9px; font-weight: 500; text-align: right; color: #666; }

        /* ---------- Hero ---------- */
        .hero {
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
            padding: 36px 24px 28px;
            text-align: center;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 0% 100%, rgba(255, 186, 52, .95) 0%, rgba(255, 186, 52, 0) 45%),
                radial-gradient(ellipse at 0% 0%, rgba(47, 76, 190, .95) 0%, rgba(47, 76, 190, 0) 45%),
                radial-gradient(ellipse at 100% 50%, rgba(255, 64, 140, .95) 0%, rgba(255, 64, 140, 0) 50%),
                linear-gradient(90deg, #f4f1ff 0%, #ffffff 50%, #ffe3f0 100%);
        }

        .tagline {
            background: rgba(255, 255, 255, .85);
            border-radius: 999px;
            padding: 8px 28px;
            font-size: 15px;
            font-weight: 600;
            color: var(--ink);
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        }

        .title { line-height: .9; }
        .title .future {
            display: block;
            font-size: clamp(56px, 9vw, 104px);
            font-weight: 800;
            color: var(--maroon);
            letter-spacing: -2px;
        }
        .title .starter {
            display: block;
            font-size: clamp(64px, 11vw, 128px);
            font-weight: 800;
            color: var(--gold);
            letter-spacing: 2px;
            text-shadow: 2px 3px 0 rgba(163, 23, 79, .18);
        }
        .title .starter span { color: var(--teal); }

        .description {
            max-width: 620px;
            font-size: 13.5px;
            line-height: 1.5;
            color: #3b3f5c;
        }

        .badge {
            font-size: 17px;
            font-weight: 600;
            color: #fff;
            background: rgba(163, 23, 79, .9);
            padding: 8px 22px;
            border-radius: 12px;
        }

        /* ---------- Feature nav ---------- */
        .feature-nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 6px;
            width: min(940px, 100%);
            background: var(--white);
            border-radius: 999px;
            padding: 6px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, .12);
            margin-top: 10px;
        }
        .feature-nav button {
            flex: 1 1 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border: 0;
            background: transparent;
            border-radius: 999px;
            padding: 14px 20px;
            font: 600 13px 'Poppins', sans-serif;
            color: var(--ink);
            cursor: pointer;
            transition: background .2s, color .2s;
        }
        .feature-nav button .icon {
            width: 34px; height: 34px;
            display: grid; place-items: center;
            border-radius: 50%;
            border: 2px solid var(--maroon);
            color: var(--maroon);
            font-size: 15px;
            background: #fff;
        }
        .feature-nav button:hover { background: #fbeaf1; }
        .feature-nav button:focus-visible { outline: 3px solid var(--ink); outline-offset: 2px; }
        .feature-nav button.active { background: var(--maroon); color: #fff; }
        .feature-nav button.active .icon { border-color: #fff; background: rgba(255, 255, 255, .15); color: #fff; }

        /* ---------- Footer ---------- */
        .footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 12px;
            background: var(--maroon-dark);
            color: #f6dbe6;
            font-size: 10px;
            line-height: 1.5;
            padding: 14px 28px;
        }
        .footer p:last-child { text-align: right; }

        @media (max-width: 640px) {
            .footer p:last-child { text-align: left; }
            .feature-nav { border-radius: 24px; }
        }
    </style>
</head>
<body>

    <main class="hero">
        <div class="tagline">Invest in What's Next with Y.O.U.T.H.</div>

        <h1 class="title" aria-label="Future Starter">
            <span class="future">Future</span>
            <span class="starter"><span>S</span>TARTER</span>
        </h1>

        <div class="badge">Peso denominated Unit investment trust fund</div>

        <nav class="feature-nav" aria-label="Features">
            <button type="button" class="active" data-target="why">
                <span class="icon">&#9787;</span> Why BPI Future Starter
            </button>
            <button type="button" data-target="vision">
                <span class="icon">&#9678;</span> Vision Board
            </button>
            <button type="button" data-target="goal">
                <span class="icon">&#9638;</span> Goal Calculator
            </button>
            <button type="button" data-target="more">
                <span class="icon">&#9873;</span> Learn More
            </button>
        </nav>
    </main>

    <footer class="footer">
        <p>
            Mutual funds are not deposits and are not insured by the PDIC.<br>
            Returns of mutual funds are not guaranteed.
        </p>
        <p>
            Learn more about the product features, risks, and our fees at www.bpi.com.ph<br>
            BPI Wealth is regulated by the Bangko Sentral ng Pilipinas.
        </p>
    </footer>

    <script>
        document.querySelectorAll('.feature-nav button').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.feature-nav button').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');
                // Hook for your own logic, e.g. open a modal or route:
                // window.location.href = "{{ url('/') }}/" + btn.dataset.target;
            });
        });
    </script>
</body>
</html>