<div class="w-full banner-slider -mt-25">
    <div class="banner-slider__viewport">
        <div class="banner-slider__slides">
            <div class="banner-slide banner-slide--active">
                <div class="banner-slide__bg" style="background-image:url('/images/banner/1.jpg')"></div>
                <div class="banner-slide__inner">
                    <div class="banner-slide__content">
                        <span class="banner-slide__tag">Comrel</span>
                        <h2 class="banner-slide__title">Discover our latest collection</h2>
                        <p class="banner-slide__desc">Explore premium items crafted with care — modern designs, sustainable materials, and exceptional fit.</p>
                    </div>
                    <div class="banner-slide__image">
                        <img src="/images/banner/1.jpg" alt="Banner 1" />
                    </div>
                </div>
            </div>

            <div class="banner-slide">
                <div class="banner-slide__bg" style="background-image:url('/images/banner/2.jpg')"></div>
                <div class="banner-slide__inner">
                    <div class="banner-slide__content">
                        <span class="banner-slide__tag">PHILSAGA</span>
                        <h2 class="banner-slide__title">Up to 50% off selected items</h2>
                        <p class="banner-slide__desc">Limited time offers across our seasonal range. Don’t miss out — stock is limited.</p>
                    </div>
                    <div class="banner-slide__image">
                        <img src="/images/banner/2.jpg" alt="Banner 2" />
                    </div>
                </div>
            </div>

            <div class="banner-slide">
                <div class="banner-slide__bg" style="background-image:url('/images/banner/3.jpg')"></div>
                <div class="banner-slide__inner">
                    <div class="banner-slide__content">
                        <span class="banner-slide__tag">Featured</span>
                        <h2 class="banner-slide__title">Handpicked favourites</h2>
                        <p class="banner-slide__desc">Our team selects standout pieces that combine style and comfort for everyday wear.</p>
                    </div>
                    <div class="banner-slide__image">
                        <img src="/images/banner/3.jpg" alt="Banner 3" />
                    </div>
                </div>
            </div>
        </div>
        <button class="banner-slider__nav banner-slider__nav--prev" aria-label="Previous slide">‹</button>
        <button class="banner-slider__nav banner-slider__nav--next" aria-label="Next slide">›</button>
        <div class="banner-slider__dots" role="tablist" aria-label="Select slide">
            <button class="banner-slider__dot banner-slider__dot--active" data-index="0" aria-label="Slide 1"></button>
            <button class="banner-slider__dot" data-index="1" aria-label="Slide 2"></button>
            <button class="banner-slider__dot" data-index="2" aria-label="Slide 3"></button>
        </div>
    </div>

    <style>
    .banner-slider__viewport{position:relative;overflow:hidden}
    .banner-slider__slides{display:flex;width:100%;transition:transform .6s ease;will-change:transform}
    .banner-slide{flex:1 0 100%;min-height:300px;background:#0f172a;color:#fff;max-height:700px;overflow:hidden;position:relative}
    .banner-slide__bg{position:absolute;inset:0;background-size:cover;background-position:center;filter:blur(12px) saturate(1.05);transform:scale(1.06);z-index:0}
    .banner-slide__inner{display:flex;flex-direction:column;align-items:stretch;min-height:300px;position:relative;z-index:1}
    .banner-slide__content{padding:1.25rem;background:linear-gradient(90deg,rgba(2,6,23,0.65),transparent);display:flex;flex-direction:column;justify-content:center}
    .banner-slide__tag{display:inline-block;width: fit-content;background:#198754;color:#fff;padding:.25rem .75rem;border-radius:9999px;font-weight:600;font-size:.75rem}
    .banner-slide__title{margin-top:1rem;font-size:2.75rem;line-height:1.05;font-weight:700}
    .banner-slide__desc{margin-top:.75rem;color:rgba(255,255,255,.85);font-size:1rem}
    .banner-slide__image{width:100%;height:220px;overflow:hidden}
    .banner-slide__image img{width:100%;height:100%;object-fit:cover;display:block}
    .banner-slider__nav{position:absolute;top:50%;transform:translateY(-50%);background:rgba(0,0,0,.4);color:#fff;border:0;padding:.5rem .75rem;font-size:2.6rem;cursor:pointer;padding-top: 0px;}
    .banner-slider__nav--prev{left:8px}
    .banner-slider__nav--next{right:8px}
    .banner-slider__dots{position:absolute;left:50%;transform:translateX(-50%);bottom:12px;display:flex;gap:.5rem}
    .banner-slider__dot{width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,.45);border:0;cursor:pointer}
    .banner-slider__dot--active{background:rgba(255,255,255,1)}
    @media(min-width:768px){
        .banner-slide{min-height:360px}
        .banner-slide__inner{flex-direction:row}
        .banner-slide__content{width:50%;padding:3rem;padding-left: 10%;}
        .banner-slide__image{width:50%;height:auto}
    }
    @media(max-width:640px){
        .banner-slide__bg{display:none}
    }
    </style>

    <script>
    (function(){
        const root = document.currentScript ? document.currentScript.parentElement : document.querySelector('.banner-slider');
        if(!root) return;
        const slidesWrap = root.querySelector('.banner-slider__slides');
        const slides = Array.from(root.querySelectorAll('.banner-slide'));
        const prev = root.querySelector('.banner-slider__nav--prev');
        const next = root.querySelector('.banner-slider__nav--next');
        const dots = Array.from(root.querySelectorAll('.banner-slider__dot'));
        let index = slides.findIndex(s=>s.classList.contains('banner-slide--active')) || 0;
        let timer = null;

        function go(i){
            index = (i+slides.length) % slides.length;
            slidesWrap.style.transform = `translateX(${ -index * 100 }%)`;
            slides.forEach((s,idx)=> s.classList.toggle('banner-slide--active', idx===index));
            dots.forEach((d,idx)=> d.classList.toggle('banner-slider__dot--active', idx===index));
        }

        function nextSlide(){ go(index+1) }
        function prevSlide(){ go(index-1) }

        next.addEventListener('click', ()=>{ nextSlide(); resetTimer(); });
        prev.addEventListener('click', ()=>{ prevSlide(); resetTimer(); });
        dots.forEach(d=> d.addEventListener('click', e=>{ go(Number(e.currentTarget.dataset.index)); resetTimer(); }));

        function startTimer(){ timer = setInterval(nextSlide, 5000); }
        function resetTimer(){ clearInterval(timer); startTimer(); }

        // Start
        go(index);
        startTimer();
    })();
    </script>
</div>