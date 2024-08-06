// jQuery(function ($) {
//     // svgをインラインで読み込む
//     deSVG('.svg', true);

//     /*―――――――――――――――――――――――――――――――――――――――――――――
//     /* 374px以下はviewportを固定
//     ――――――――――――――――――――――――――――――――――――――――――――――*/
//     !(function () {
//         const viewport = document.querySelector('meta[name="viewport"]');
//         function switchViewport() {
//             const value =
//                 window.outerWidth > 374
//                     ? 'width=device-width,initial-scale=1'
//                     : 'width=360';
//             if (viewport.getAttribute('content') !== value) {
//                 viewport.setAttribute('content', value);
//             }
//         }
//         addEventListener('resize', switchViewport, false);
//         switchViewport();
//     })();

//     /*―――――――――――――――――――――――――――――――――――――――――――――
//     /* 電話番号をPC無効化
//     ――――――――――――――――――――――――――――――――――――――――――――――*/

//     (function () {
//         var ua = navigator.userAgent.toLowerCase();
//         var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

//         if (!isMobile) {
//             $('a[href^="tel:"]').on('click', function (e) {
//                 e.preventDefault();
//             });
//         }
//     })();


//     /*―――――――――――――――――――――――――――――――――――――――――――――
//     /* top　紙吹雪
//     ――――――――――――――――――――――――――――――――――――――――――――――*/
//     (function () {
//         if (!$('.js-kamiFubuki').length) {
//             return;
//         }
//         window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame;

//         var canvasBox = document.querySelector('.canvasBox');
//         var canvas = document.querySelector(".js-kamiFubuki");
//         var boxWidth = canvasBox.offsetWidth;
//         var boxHeight = canvasBox.offsetHeight;
//         canvas.width = boxWidth;
//         canvas.height = boxHeight;
//         var ctx = canvas.getContext("2d");
//         ctx.globalCompositeOperation = "source-over";
//         var particles = [];
//         var pIndex = 0;
//         var x, y, frameId;
//         var volume = 5;
//         if (window.innerWidth < 678) {
//             volume = 10;
//         }

//         function Dot(x, y, vx, vy, color) {
//             this.x = x;
//             this.y = y;
//             this.vx = vx;
//             this.vy = vy;
//             this.color = color;
//             particles[pIndex] = this;
//             this.id = pIndex;
//             pIndex++;
//             this.life = 0;
//             this.maxlife = 300;
//             this.degree = getRandom(0, 360); //開始角度をずらす
//             this.size = Math.floor(getRandom(6, 8));//紙吹雪のサイズに変化をつける
//         };

//         Dot.prototype.draw = function (x, y) {

//             this.degree += 1;
//             this.vx *= 0.99; //重力
//             this.vy *= 0.997; //重力
//             this.x += this.vx + Math.cos(this.degree * Math.PI / 180); //蛇行
//             this.y += this.vy;
//             this.width = this.size;
//             this.height = Math.cos(this.degree * Math.PI / 45) * this.size; //高さを変化させて、回転させてるっぽくみせる
//             //紙吹雪の描写
//             ctx.fillStyle = this.color;
//             ctx.beginPath();
//             ctx.moveTo(this.x + this.x / 2, this.y + this.y / 2);
//             ctx.lineTo(this.x + this.x / 2 + this.width / 2, this.y + this.y / 2 + this.height);
//             ctx.lineTo(this.x + this.x / 2 + this.width + this.width / 2, this.y + this.y / 2 + this.height);
//             ctx.lineTo(this.x + this.x / 2 + this.width, this.y + this.y / 2);
//             ctx.closePath();
//             ctx.fill();
//             this.life++;
//             //lifeがなくなったら紙吹雪を削除
//             if (this.life >= this.maxlife) {
//                 delete particles[this.id];
//             }
//         }
//         //リサイズ処理
//         window.addEventListener("resize", function () {
//             canvas.width = boxWidth;
//             canvas.height = boxHeight;
//             this.x = canvas.width;
//             this.y = canvas.height;
//         });

//         function loop() {
//             //全画面に色をしく。透過率をあげると残像が強くなる
//             ctx.clearRect(0, 0, canvas.width, canvas.height);
//             //紙吹雪の量の調節
//             if (frameId % volume == 0) {
//                 new Dot(canvas.width * Math.random() - canvas.width + canvas.width / 2 * Math.random(), 0, getRandom(0.5, 1.5), getRandom(1, 2), "#F03F3E");
//                 new Dot(canvas.width * Math.random() + canvas.width - canvas.width * Math.random(), 0, -1 * getRandom(0.5, 1.5), getRandom(1, 2), "#000000");
//             }
//             for (var i in particles) {
//                 particles[i].draw();
//             }
//             frameId = requestAnimationFrame(loop);
//         }

//         loop();

//         function getRandom(min, max) {
//             return Math.random() * (max - min) + min;
//         }

//     })();

//     /*―――――――――――――――――――――――――――――――――――――――――――――
//     /* パララックス
//     ――――――――――――――――――――――――――――――――――――――――――――――*/

//     $('.js-parallax').css({
//         'overflow': 'hidden',
//         'position': 'relative',
//         'z-index': '0',
//     });
//     $('.js-parallax img').css({
//         'position': 'absolute',
//         'left': '0',
//         'bottom': '0',
//         'width': '100%',
//         'height': 'calc(100% + 100px)',
//         'object-fit': 'cover',
//         'will-change': 'transform'
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     gsap.utils.toArray('.js-parallax img').forEach(wrap => {
//         const imgParent = wrap.closest('.js-parallax');
//         const y = wrap.getAttribute('data-y') || 100;

//         gsap.to(wrap, {
//             y: y,
//             ease: 'none',
//             scrollTrigger: {
//                 trigger: imgParent,
//                 start: 'top bottom',
//                 end: 'bottom top',
//                 scrub: 0.5,
//             }
//         });

//     });
// });

// /*―――――――――――――――――――――――――――――――――――――――――――――
// /* widthFit
// ――――――――――――――――――――――――――――――――――――――――――――――*/
// const widthFit = ($el) => {
//     let prev_w = '';
//     let max_w = '';
//     $($el).each(function () {
//         const this_w = $(this).width();

//         if (!prev_w) {
//             prev_w = this_w;
//             max_w = this_w;
//             return true;
//         }

//         if (this_w > max_w) {
//             max_w = this_w;
//         }

//         prev_w = this_w;

//     });
//     $($el).width(max_w);
// }

const headerScroll = () =>{

    $(window).on('scroll',function(){

        let windowHeight = $(window).scrollTop();

        if(windowHeight > 0){
            $('.headerNav').addClass('is-scroll'),
            $('.headerLogo').addClass('is-scroll'),
            $('.header').addClass('is-scroll');
        }else{
            $('.headerNav').removeClass('is-scroll'),
            $('.headerLogo').removeClass('is-scroll'),
            $('.header').removeClass('is-scroll');
        }
        console.log(windowHeight);
    })
}

headerScroll();

// FB
// jsとcssで役割を分担する
// jsではクラスのつけ外し　cssでプロパティ
// .headerNavはdisplay:none;ではなく、visibilityやopacity,heightを指定してtransitionを効かせる
