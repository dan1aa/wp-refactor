<?php
/*
Template Name: Page "Global Nobel Intership"
*/
?>

<?php get_header(); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
	/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button,[type=button],[type=reset],[type=submit]{-webkit-appearance:button}button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}.section__subtitle,.section__title,.thanks__title--reg,.title__text-bold{font-weight:700}.thanks__title--bold,.join__title,.title__text-regular{font-weight:500}.section__text,.section__item,.section__desc,.title__help-text,.header__link.unique,body{font-weight:400}.stand__item-time,.stand__item-title,.stand__title,.thanks__back,.default__btn,.title__help-link,.header__item{font-weight:600}h1,h2,h3,h4,h5,h6{margin:0}* p{margin:0;padding:0}* ul,* li{padding:0;margin:0;list-style:none}* button{font-family:inherit;outline:none;cursor:pointer}* input,* textarea{font-family:inherit;outline:none}*,*:after,*:before{-webkit-box-sizing:border-box;box-sizing:border-box}* a{display:inline-block;text-decoration:none;color:inherit;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}body{font-size:16px;color:#000;margin:0}:root{--header-height: 98px;--header-wrapper: 16px;--join-back: 28px}.container{max-width:1920px;margin:0 auto;padding:0 90px}.header .container{padding:0 40px}.header__inner{height:var(--header-height);position:relative}.header{width:100%;position:fixed;top:0;z-index:999;background-color:#fff;max-height:var(--header-height);min-height:var(--header-height);height:var(--header-height);-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header.sticky{-webkit-box-shadow:0px 6px 15px 0px rgba(0,0,0,.06);box-shadow:0px 6px 15px 0px rgba(0,0,0,.06)}.header__logo{height:calc(var(--header-height) - var(--header-wrapper)*2);display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex}.header__logo-img{display:block;max-width:100%;max-height:100%}.header__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:var(--header-wrapper) 0;max-height:var(--header-height)}.header__list{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.header__item{font-size:16px;margin-right:26px}.header__item:last-child{margin-right:0}.header__link{-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;position:relative;line-height:150%}.header__link.default::after{content:"";position:absolute;right:-10%;left:-10%;bottom:-8px;margin:0 auto;width:0%;height:2px;background-color:#3478f6;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header__link:hover{color:#3478f6}.header__link:hover::after{width:120%}.header__link.unique{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#007bff;border-radius:5px;color:#fff;line-height:100%;padding:15px 22px;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header__link.unique:hover{background-color:#fc0}.title__image{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:block}.title__text{line-height:150%;font-size:72px;text-align:center}.title__content{margin-top:63px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.title__help{margin-left:103px}.title__help-text{font-size:48px;line-height:150%;text-align:center}.title__help-item{margin-top:32px}.title__help-icon{margin-right:32px}.title__help-link{font-size:24px;line-height:150%;min-width:740px;padding:16px 32px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;border-radius:20px}.title__help-link.blue{background:rgba(137,227,255,.75)}.title__help-link.blue:hover{-webkit-box-shadow:0px 0px 20px 10px rgba(120,174,255,.35);box-shadow:0px 0px 20px 10px rgba(120,174,255,.35);-webkit-transform:scale(1.025);-ms-transform:scale(1.025);transform:scale(1.025)}.title__help-link.yellow{background:rgba(255,243,137,.75)}.title__help-link.yellow:hover{-webkit-box-shadow:0px 0px 20px 10px rgba(255,194,70,.35);box-shadow:0px 0px 20px 10px rgba(255,194,70,.35);-webkit-transform:scale(1.025);-ms-transform:scale(1.025);transform:scale(1.025)}.header__menu{display:none}.ham{cursor:pointer;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-transition:-webkit-transform 400ms;transition:-webkit-transform 400ms;-o-transition:transform 400ms;transition:transform 400ms;transition:transform 400ms,-webkit-transform 400ms;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.hamRotate.active{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.hamRotate180.active{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.line{fill:none;-webkit-transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;-o-transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;stroke:#000;stroke-width:5.5;stroke-linecap:round}.ham4 .top{stroke-dasharray:40 121}.ham4 .bottom{stroke-dasharray:40 121}.ham4.active .top{stroke-dashoffset:-68px}.ham4.active .bottom{stroke-dashoffset:-68px}.join{padding-top:72px;padding-bottom:48px;min-height:calc(100vh - var(--header-height));background:rgba(137,227,255,.27);position:relative;overflow:visible}.join.teach{background:rgba(255,243,137,.27)}.join .container{padding:0 124px}.join__content{position:relative;z-index:2}.join__title{font-size:100px;line-height:112%}.join__desc{font-size:18px;line-height:150%;color:#8d8d8d;margin-top:48px;max-width:760px}.default__btn{position:relative;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;color:#fff;background:#000;border-radius:30px;min-width:500px;text-align:center;padding:12px;font-size:36px;line-height:150%;margin-top:56px;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.btn:link,.btn:visited{text-transform:uppercase;text-decoration:none;padding:15px 40px;display:inline-block;border-radius:100px;-webkit-transition:all .25s;-o-transition:all .25s;transition:all .25s;position:relative}.btn:hover{-webkit-transform:translateY(-8px);-ms-transform:translateY(-8px);transform:translateY(-8px);-webkit-box-shadow:0 10px 20px rgba(0,0,0,.2);box-shadow:0 10px 20px rgba(0,0,0,.2);opacity:.9}.btn:active{-webkit-transform:translateY(-1px);-ms-transform:translateY(-1px);transform:translateY(-1px);-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2)}.btn::after{content:"";display:inline-block;height:100%;width:100%;border-radius:100px;position:absolute;top:0;left:0;z-index:-1;-webkit-transition:all .4s;-o-transition:all .4s;transition:all .4s}.btn-white::after{background-color:#000}.btn:hover::after{-webkit-transform:scaleX(1.2) scaleY(1.4);-ms-transform:scaleX(1.2) scaleY(1.4);transform:scaleX(1.2) scaleY(1.4);opacity:0}.btn-animated{-webkit-animation:moveInBottom 5s ease-out;animation:moveInBottom 5s ease-out;-webkit-animation-fill-mode:backwards;animation-fill-mode:backwards}@-webkit-keyframes moveInBottom{0%{opacity:0;-webkit-transform:translateY(30px);transform:translateY(30px)}100%{opacity:1;-webkit-transform:translateY(0px);transform:translateY(0px)}}@keyframes moveInBottom{0%{opacity:0;-webkit-transform:translateY(30px);transform:translateY(30px)}100%{opacity:1;-webkit-transform:translateY(0px);transform:translateY(0px)}}.join__image{position:absolute;right:0;bottom:0;z-index:1;max-height:80vh}.join__back{position:absolute;left:-85px;top:var(--join-back);-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;display:block}.join__back:hover{opacity:.7;top:calc(var(--join-back) - 8px)}.mfp-container{padding:0}.sign{background:#fff;-webkit-box-shadow:0px 4px 4px rgba(0,0,0,.25);box-shadow:0px 4px 4px rgba(0,0,0,.25);border-radius:30px;padding:60px 80px;max-width:1066px;margin:0 auto;position:relative;overflow:hidden}.sign__title{font-size:56px;line-height:150%;text-align:center}.sign__desc{color:#8d8d8d;text-align:center;font-size:18px;line-height:150%}.sign__form{margin-top:28px}.sign__form-title{font-size:28px;line-height:150%;display:block;margin-bottom:4px;margin-top:10px}.sign__form-name{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.sign__form-first-name,.sign__form-last-name{width:48%}.sign__form-input{width:100%;background:#fff;border:1px solid #000;border-radius:20px;font-size:28px;line-height:150%;padding:12px 24px}.sign__form-error{color:#ff0028;font-size:20px;line-height:150%;margin-top:4px;display:inline-block;opacity:1;display:none}.sign__form-btn{width:100%;font-size:32px;margin-top:56px;display:block;max-width:100%;border:none}.mfp-close{display:none !important}.mfp-wrap{}.thanks{padding-top:72px;min-height:calc(100vh - var(--header-height));background:-webkit-gradient(linear, left top, left bottom, from(rgba(137, 227, 255, 0.75)), to(rgba(255, 243, 137, 0.27)));background:-o-linear-gradient(top, rgba(137, 227, 255, 0.75) 0%, rgba(255, 243, 137, 0.27) 100%);background:linear-gradient(180deg, rgba(137, 227, 255, 0.75) 0%, rgba(255, 243, 137, 0.27) 100%);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-top:40px;padding-bottom:40px;text-align:center;margin:0 auto}.thanks__title{margin-top:26px;font-size:64px;line-height:150%}.thanks__title--bold{position:relative}.thanks__title--bold::after{position:absolute;content:"";width:100%;bottom:12px;height:3px;background-color:#000;right:0;left:0;margin:0 auto}.thanks__title--bold.error::after{content:none;height:0}.thanks__emoji{border-bottom:1px solid #fff;line-height:500%;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;margin:0 auto}.thanks__desc{max-width:1124px;margin-top:36px;font-size:20px;line-height:150%;color:#8d8d8d}.thanks__back{margin-top:64px;color:#8d8d8d;font-size:24px;line-height:150%;position:relative;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;padding-left:34px}.thanks__back::before{content:"";position:absolute;background-image:url("<? echo get_template_directory_uri(); ?>/assets/images/icons/arrow-back.svg");background-repeat:no-repeat;background-size:contain;width:22px;height:20px;left:6px;top:0;bottom:0;margin:auto;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.thanks__back:hover::before{left:0}.thanks__back-text{position:relative}.thanks__back-text::after{content:"";position:absolute;bottom:2px;right:0;left:0;margin:0 auto;height:2px;background-color:#8d8d8d;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.thanks__back:hover .thanks__back-text::after{-webkit-transform:scale(1.25);-ms-transform:scale(1.25);transform:scale(1.25);opacity:0}.thanks__back:hover{opacity:.8}.sign__close{border:none;background-color:rgba(0,0,0,0);position:absolute;right:0;top:0;border-top-right-radius:30px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:8px;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.sign__close-img{width:56px;height:56px;display:block;pointer-events:none}.sign__close:hover{opacity:.7}.error__img{max-width:100%;display:block}.stand{overflow:hidden;padding:60px 0}.stand .container{padding:0 80px;max-width:1368px}.stand__head{position:relative}.stand__image{position:absolute;right:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.stand__title{font-size:48px;line-height:1.17;letter-spacing:.45px}.stand__desc{margin-top:24px;letter-spacing:.17px;font-size:18px;max-width:850px;line-height:1.78}.stand__content{display:-ms-grid;display:grid;-ms-grid-columns:1fr 1fr 1fr;grid-template-columns:1fr 1fr 1fr;grid-gap:24px;grid-auto-rows:minmax(100px, auto);position:relative;margin-top:40px}.stand__content-decor{position:absolute}.stand__content-decor.left{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);left:-80px;z-index:-1}.stand__content-decor.bottom{bottom:-37px;right:-35px;z-index:-1}.stand__content-decor.left .stand__content-dots{width:80px;display:block}.stand__content-decor.bottom .stand__content-dots{width:289px;display:block}.stand__content-decor--mob{display:none}.stand__item{position:relative;z-index:2;padding:40px 24px}.stand__item:first-child{-ms-grid-row:1;grid-row-start:1;-ms-grid-row-span:2;grid-row-end:3}.stand__item:nth-child(4){-ms-grid-column:2;grid-column-start:2;-ms-grid-column-span:2;grid-column-end:4;background:url(<? echo get_template_directory_uri(); ?>/assets/images/help-ukraine.png) center no-repeat;background-position:right;min-height:404px}.stand__item.blue{background-color:#2575fc;color:#fff}.stand__item.blue .stand__icon path{fill:#fff}.stand__item.yellow{background-color:#fadf55}.stand__item-link{margin-top:16px;position:relative;padding:6px 21px 6px 0;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.stand__item-link::after{content:"";position:absolute;width:100%;height:2px;background-color:#fff;bottom:0px;right:0;left:0;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.stand__item-link::before{position:absolute;content:"";right:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);margin:auto 0;height:12px;width:12px;background-image:url(<? echo get_template_directory_uri(); ?>/assets/images/icons/arrow-white.png);background-size:cover;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.stand__item-link:hover{opacity:.75}.stand__item-link:hover::before{right:-4px}.stand__item-link:hover::after{opacity:0;-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}.stand__item-title{line-height:125%;letter-spacing:.3px;font-size:32px;min-height:80px}.stand__item-desc{margin-top:24px;line-height:2;letter-spacing:.15px}.stand__item-time{display:block;margin-top:24px;letter-spacing:.15px;line-height:2}.stand__item.unique{background-color:#fff}.stand__item.unique .stand__item-title{min-height:auto;position:relative;padding-bottom:11px;padding-left:24px;padding-right:2px;display:inline-block;z-index:1}.stand__item.unique .stand__item-title::after{content:"";position:absolute;left:0;bottom:0;right:0;margin:0 auto;width:100%;height:23px;background:url(<? echo get_template_directory_uri(); ?>/assets/images/icons/unique-title.png) center/cover no-repeat;z-index:-1}.stand__item.unique .stand__item-desc{max-width:340px}.stand__item-btn{text-align:center;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;background-color:#2575fc;padding:11px 34px;border-radius:5px;text-transform:uppercase;color:#fff;margin-top:auto;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;border:2px solid #2575fc}.stand__item-btn:hover{color:#2575fc;background-color:#fff}.stand__item.flex{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.stand__item.flex .stand__item-desc{margin-bottom:24px}.stand__item.unique .stand__item-btn{margin-top:24px}.stand__icon{display:none}.stand__item.flex .stand__box{height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.thanks__title--reg{font-size:96px;line-height:1.15;margin:125px 0}.thanks__logo img{display:block}.thanks__check-desc{color:#8d8d8d;font-size:24px;line-height:1.5;margin-top:12px}.thanks__title--reg .highlight{position:relative;z-index:2}.thanks__title--reg .highlight::after{content:"";position:absolute;bottom:12px;width:120%;height:35%;background-color:#fff800;right:0;left:0;margin:0 -10%;z-index:-1}.light-blue{background:rgba(144,202,249,.1);-webkit-backdrop-filter:blur(39px);backdrop-filter:blur(39px)}.light-yellow{background:rgba(255,243,137,.17);-webkit-backdrop-filter:blur(39px);backdrop-filter:blur(39px)}.light-yellow .thanks__title--reg .highlight::after{background-color:#2a94f4}.section .container{max-width:1144px;padding:0 65px;margin:0}.section{margin-top:65px;margin-bottom:65px}.section__title{font-size:64px;line-height:1.5}.highlight-yellow{position:relative}.highlight-yellow::after{position:absolute;content:"";z-index:-1;background-color:#fff800;height:35%;width:104%;margin:0 -2%;left:0;right:0;bottom:0}.section__desc{margin-top:38px;font-size:20px;line-height:1.5;color:#8d8d8d}.section__subtitle{margin-top:38px;font-size:32px;line-height:1.5}.section__list{margin-top:25px}.section__item{font-size:24px;line-height:1.5;list-style:inside;margin:8px 0}.section__text{font-size:16px;line-height:1.5}.section__logo{position:absolute;right:65px;bottom:0}.section__logo img{display:block}.section{position:relative}.section__text{font-size:16px;line-height:1.5;margin-top:24px}.section__link{color:#2a94f4;position:relative;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;background-color:rgba(0,0,0,0);-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto;z-index:1}.section__link:hover{color:#78bbf8;background-color:rgba(0,0,0,0)}.section__link:hover::after{background-color:#78bbf8}.section__link::after{-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;position:absolute;content:"";width:100%;height:1px;background-color:#2a94f4;left:0;right:0;margin:0 auto;bottom:3px;z-index:-1}
	@media(max-width: 1900px){.title__text{font-size:60px}.title__help{margin-left:80px}.title__image{max-width:750px}.title__help-text{font-size:40px}.title__help-link{min-width:644px;font-size:20px}.title__help-icon{margin-right:28px;width:40px;height:40px}.container{padding:0 80px}}@media(max-width: 1679px){.title__text{font-size:54px}.title__help{margin-left:0}.title__help-text{font-size:36px}.title__content{margin-top:60px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.title__help-link{min-width:564px;font-size:18px;padding:14px 28px}.title__help-item{margin-top:28px}.title__help-icon{margin-right:20px;width:36px;height:36px}.container{padding:0 70px}}@media(max-width: 1535px){.container{padding:0 60px}.title__text{font-size:48px}.title__image{max-width:680px}:root{--header-height: 82px;--header-wrapper: 8px}}@media(max-width: 1439px){.title__image{max-width:620px}}@media(max-width: 1360px){.title__image{max-width:580px}.title__text{font-size:40px}.title__content{margin-top:40px}.title__help-link{min-width:494px;font-size:16px;padding:10px 20px}.title__help-icon{margin-right:16px;width:30px;height:30px}.title__help-text{font-size:32px}.title__help-item{margin-top:24px}}@media(max-width: 1240px){.title__image{max-width:540px}}@media(max-width: 1198px){.title__help-text{font-size:28px}.title__help-item{margin-top:20px}.title__help-link{min-width:432px;font-size:14px}.title__help-icon{margin-right:14px;width:28px;height:28px}}@media(max-width: 1150px){.container{padding:0 50px}.title__text{font-size:36px}.title__image{max-width:480px}}@media(max-width: 1024px){.container{padding:0 40px}.title__content{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.title__image{max-width:75%;margin:0 auto}.title__help{margin-top:40px}.header__menu{display:block}.header__nav{width:100%;position:absolute;top:var(--header-height);right:-100%;background-color:#fff;padding:36px;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;-webkit-box-shadow:0px 8px 12px -6px rgba(0,0,0,.35),5px 5px 15px 5px rgba(0,0,0,0);box-shadow:0px 8px 12px -6px rgba(0,0,0,.35),5px 5px 15px 5px rgba(0,0,0,0)}.header__nav.active{right:0}.header__list{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.header__item{text-transform:uppercase;margin-right:0;font-size:28px;margin-top:16px}.header__item:first-child{margin-top:0}.header .container{padding:0 20px}.header__logo{margin-left:11px}.title__text{line-height:125%}}@media(max-width: 1024px)and (min-width: 640px){.title__help-text{font-size:36px}.title__help-link{min-width:540px;font-size:18px;padding:16px 32px}.title__help-item{margin-top:24px}}@media(max-width: 820px){.title__image{max-width:80%}}@media(max-width: 768px){.title__image{max-width:85%}.container{padding:0 30px}.header .container{padding:0 15px}.header__item{font-size:24px}}@media(max-width: 640px){.title__image{max-width:90%}.header .container{padding:0 10px}}@media(max-width: 520px){.title__image{max-width:100%}.container{padding:0 20px}.title__help-link{min-width:auto;width:95%;margin:0 auto}.title__help{width:100%}.header__item{font-size:22px}:root{--header-height: 64px;--header-wrapper: 5px}.header__menu{width:54px;height:54px}.title__text{text-align:left}.header .container{padding:0 5px}}@media(max-width: 420px){.header__item{font-size:20px}.title__help-link{width:100%}.title__help-text{line-height:125%;font-size:24px}.title__help-item{margin-top:16px}.title__content{margin-top:36px}.title__help{margin-top:36px}}@media(max-width: 1900px){.join__title{font-size:80px}.join__desc{max-width:656px;margin-top:32px}.join__image{max-width:900px}.join__btn{margin-top:48px}:root{--join-back: 20px}.join{padding-top:60px;padding-bottom:40px}}@media(max-width: 1660px){.join__title{font-size:72px}.join__desc{max-width:600px;margin-top:24px}.join__btn{font-size:30px;min-width:420px;margin-top:36px;padding:14px 28px !important}.join__image{max-width:800px}.join .container{padding:0 90px}.join__back{left:-64px}.join__back svg{width:38px}:root{--join-back: 16px}}@media(max-width: 1500px){.join__image{max-width:780px}.join__desc{font-size:16px;max-width:560px}}@media(max-width: 1420px){.join__image{max-width:700px}}@media(max-width: 1330px){.join__desc{max-width:520px}.join__image{max-width:640px}.join__btn{font-size:24px;min-width:380px}}@media(max-width: 1240px)and (min-width: 1025px){.join__desc{font-size:14px;max-width:480px}.join__btn{font-size:24px;min-width:320px;padding:10px 20px !important}.join__image{max-width:600px}.join{padding-top:40px}.join .container{padding:0 70px}.join__back{left:-54px}}@media(max-width: 1130px)and (min-width: 1025px){.join__image{max-width:510px}}@media(max-width: 1024px){.join__image{margin-top:48px;position:static;max-width:100%;width:100%;display:block}.join__desc{max-width:100%;font-size:18px}.join{padding-top:40px;padding-bottom:0}.join__btn{font-size:28px;padding:16px 32px !important;min-width:420px}}@media(max-width: 900px){.join__title{font-size:64px}:root{--join-back: 10px }.join__back{left:-52px}.join__back svg{width:32px}.join .container{padding:0 70px}}@media(max-width: 820px){.join__btn{display:block !important;margin-left:auto !important;margin-right:auto !important}.join__title{font-size:56px}.join__desc{font-size:16px}:root{--join-back: 5px}}@media(max-width: 700px){.join__title{font-size:48px}:root{--join-back: 1px}.join__btn{padding:12px 24px !important;min-width:400px}}@media(max-width: 620px){.join__title{font-size:40px}.join__btn{padding:12px 24px !important;min-width:360px;font-size:24px}.join__back{display:none}.join__back svg{width:26px}.join .container{padding:0 40px}:root{--join-back: -2px}}@media(max-width: 520px){.join__btn{min-width:100%;max-width:100%}.join__title{font-size:36px}.join__desc{font-size:14px}.join .container{padding:0 30px}}@media(max-width: 480px){.join{padding-top:32px}.join__back svg{width:22px}.join__back{left:-31px}:root{--join-back: -6px}}@media(max-width: 440px){.join__title{font-size:32px}}@media(max-width: 400px){.join .container{padding:0 20px}.join__back svg{width:18px}.join__back{left:-24px}:root{--join-back: -8px}}@media(max-width: 370px){.join__title{font-size:28px}.join__desc{font-size:12px;margin-top:16px}.join__btn{margin-top:32px;padding:12px 24px !important;font-size:20px}}@media(max-width: 340px){.join__title{font-size:26px}:root{--join-back: -11px}}@media(max-width: 1900px){.sign{max-width:960px}.sign__title{font-size:48px}.sign__form-title{font-size:24px}.sign__form-input{font-size:24px}.sign__form-btn{font-size:28px}.sign__form-error{font-size:18px}}@media(max-width: 1660px){.sign{max-width:820px;padding:56px 56px}.sign__title{font-size:40px}.sign__desc{font-size:16px}.sign__form-title{margin-top:8px;font-size:20px}.sign__form-input{font-size:20px;padding:10px 20px}.sign__form-error{font-size:14px}.sign__form-btn{margin-top:40px;font-size:24px}.sign__form{margin-top:20px}}@media(max-width: 1480px){.sign__close-img{width:48px;height:48px}.sign__title{font-size:36px}.sign__form-title{font-size:18px}.sign__form-input{font-size:18px;padding:8px 16px}.sign__form-error{font-size:14px}.sign__form-btn{margin-top:32px;font-size:20px}.sign{max-width:680px;padding:56px 48px}.sign__form{margin-top:16px}}@media(max-width: 1380px){.sign__title{font-size:32px}.sign__form-title{font-size:16px}.sign__form-input{font-size:16px;padding:8px 16px}.sign__form-error{font-size:12px}.sign__form-btn{margin-top:32px;font-size:18px}.sign__desc{font-size:14px}}@media(max-width: 1280px)and (min-width: 1025px){.sign__title{font-size:28px}.sign__form-title{font-size:16px}.sign__form-input{font-size:16px;padding:8px 16px}.sign__form-btn{margin-top:28px;font-size:18px}.sign__form{margin-top:8px}.sign{max-width:620px;padding:56px 40px}}@media(max-width: 860px){.sign__title{font-size:28px}.sign__form-title{font-size:16px}.sign__form-input{font-size:16px;padding:8px 16px}.sign__form-btn{margin-top:28px;font-size:18px}.sign__form{margin-top:8px}.sign{max-width:620px;padding:56px 40px}}@media(max-width: 740px){.sign__form-first-name,.sign__form-last-name{width:100%}.sign__form-name{display:block}.sign{max-width:540px;padding:56px 28px 44px 28px}.sign__form-btn{min-width:auto;max-width:100%}}@media(max-width: 640px){.sign__close-img{width:40px;height:40px}.sign{max-width:480px;padding:56px 28px 44px 28px}}@media(max-width: 580px){.sign{max-width:420px}}@media(max-width: 520px){.sign{max-width:380px;padding:56px 28px 32px 28px}.sign__title{font-size:24px}.sign__desc{font-size:12px}.sign__form-error{margin-top:4px}}@media(max-width: 440px){.sign{max-width:340px;padding:56px 20px 32px 20px}.sign__form-btn{margin-top:24px}}@media(max-width: 370px){.sign{max-width:320px;padding:56px 15px 32px 15px}}@media(max-width: 340px){.sign{max-width:300px}}@media(max-width: 1660px){.thanks__emoji{line-height:300%}.thanks__emoji svg{width:300px}.thanks__title{font-size:48px}.thanks__title--bold::after{bottom:8px}.thanks__desc{margin-top:28px;font-size:18px;max-width:1000px}.thanks__back{margin-top:56px}}@media(max-width: 1660px){.thanks__emoji{line-height:240%}.thanks__emoji svg{width:240px}.thanks__title{font-size:40px}.thanks__title--bold::after{bottom:4px}.thanks__desc{margin-top:28px;font-size:16px;max-width:900px}.thanks__back{margin-top:48px}}@media(max-width: 1280px)and (min-width: 1025px){.thanks{padding-top:20px;padding-bottom:20px}.thanks__emoji{line-height:100%}.thanks__emoji svg{width:180px;height:120px}.thanks__title{font-size:32px}.thanks__title--bold::after{bottom:2px}.thanks__desc{margin-top:24px;font-size:14px;max-width:780px}.thanks__back{margin-top:48px}}@media(max-width: 580px){.thanks{padding-top:20px;padding-bottom:20px}.thanks__emoji{line-height:100%}.thanks__emoji svg{width:180px;height:120px}.thanks__title{font-size:32px}.thanks__title--bold::after{bottom:4px;height:2px}.thanks__desc{margin-top:24px;font-size:14px;max-width:780px}.thanks__back{margin-top:48px}}@media(max-width: 370px){.thanks__title{font-size:28px}}@media(max-width: 340px){.thanks__title{font-size:24px}}@media(max-width: 1660px){.error__img{max-width:400px}}@media(max-width: 1280px){.error__img{max-width:300px}}@media(max-width: 370px){.error__img{max-width:280px}}@media(max-width: 1330px){.stand .container{padding:0 60px}}@media(max-width: 1260px){.stand .container{padding:0 40px}}@media(max-width: 1220px){.stand__desc{max-width:760px}.stand__item:nth-child(4){min-height:auto;background-size:contain}}@media(max-width: 1140px){.stand__desc{max-width:720px}.stand__item.unique .stand__item-desc{max-width:300px}}@media(max-width: 1080px){.stand__desc{max-width:680px}}@media(max-width: 1020px)and (min-width: 769px){.stand__title{font-size:44px}.stand__desc{font-size:16px;max-width:600px}.stand__item-title{font-size:24px;min-height:60px}.stand__item-desc{margin-top:16px;font-size:14px;line-height:1.75}.stand__content{grid-gap:16px}.stand__item{padding:24px 16px}.stand__item-time{margin-top:16px}.stand__item-link{font-size:14px}.stand__item-btn{font-size:14px;width:100%;max-width:100%;text-align:center}.stand__item.unique .stand__item-btn{max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content}.stand__item:nth-child(4){min-height:auto;background-size:contain}.stand__image{max-width:240px}.stand .container{padding:0 30px}.stand__item-time{line-height:1.5}}@media(max-width: 920px)and (min-width: 769px){.stand__desc{max-width:520px}.stand__item.unique .stand__item-desc{max-width:260px}}@media(max-width: 850px)and (min-width: 769px){.stand__desc{max-width:470px}}@media(max-width: 800px)and (min-width: 769px){.stand__desc{max-width:418px}}@media(max-width: 768px){.stand__content-decor--mob{display:block;position:absolute;z-index:1}.stand__content-decor--mob.left{top:80px;left:-18px}.stand__content-decor--mob.left .stand__content-dots--mob{max-width:39px}.stand__content-decor--mob.bottom{bottom:-20px;right:-20px}.stand__content-decor--mob.bottom .stand__content-dots--mob{max-width:113px}.stand__image{display:none}.stand__content{display:block}.stand__item{margin-top:24px}.stand__item:nth-child(1){margin-top:0}.stand{background-color:#f4f4fc}.stand__item-title{min-height:auto}.stand__box{-webkit-transition:.5s ease-in-out;-o-transition:.5s ease-in-out;transition:.5s ease-in-out;max-height:0;overflow:hidden;opacity:0;padding:0 24px}.stand__inner{padding:24px;position:relative;-webkit-transition:.5s ease-in-out;-o-transition:.5s ease-in-out;transition:.5s ease-in-out}.stand__inner.active~.stand__box{max-height:300px;opacity:1;padding:24px;padding-top:0}.stand__icon{display:block;position:absolute;width:20px;right:24px;top:32px;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg);-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.stand__inner.active .stand__icon{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}.stand__item:nth-child(4){background:none;background-color:#fff}.stand__item{padding:0}.stand__item.unique .stand__item-desc{max-width:none}.stand__item-time{margin-top:0}.stand__item-desc{margin-top:0}.stand__item.blue .stand__item-desc{margin-top:24px}}@media(max-width: 640px){.stand .container{padding:0 30px}.stand{padding:48px 0}.stand__title{font-size:40px}}@media(max-width: 520px){.stand .container{padding:0 20px}.stand{padding:40px 0}.stand__inner.active~.stand__box{max-height:340px}}@media(max-width: 420px){.stand__content-decor--mob.left{top:70px}.stand__title{font-size:36px}.stand__desc{margin-top:16px;font-size:16px}.stand__item-title{font-size:28px}.stand__icon{width:18px;top:30px}}@media(max-width: 375px){.stand__title{font-size:32px}.stand__desc{font-size:14px}.stand{padding:32px 0}.stand .container{padding:0 16px}.stand__content{margin-top:32px}.stand__item.blue .stand__item-desc{margin-top:16px}.stand__item-desc{font-size:14px}.stand__item-time{font-size:14px}.stand__item-link{font-size:14px}.stand__item-btn{font-size:14px;max-width:100%}.stand__item.flex .stand__item-desc{margin-bottom:16px}.stand__icon{width:16px;top:32px}}@media(max-width: 1620px){.thanks__title--reg{font-size:80px;margin:100px}.thanks__title--reg .highlight::after{bottom:6px}}@media(max-width: 1380px){.thanks__title--reg{font-size:64px;margin:72px}.thanks__title--reg .highlight::after{bottom:4px}.thanks__logo img{max-width:140px}.thanks__check-desc{font-size:20px;margin-top:8px}}@media(max-width: 992px){.thanks__title--reg{font-size:56px;margin:64px}.thanks__title--reg .highlight::after{bottom:2px}.thanks__logo img{max-width:120px}.thanks__check-desc{font-size:18px;margin-top:6px}}@media(max-width: 768px){.thanks__title--reg{font-size:48px;margin:56px}.thanks__title--reg .highlight::after{bottom:0px}}@media(max-width: 680px){.thanks__title--reg{font-size:40px;margin:48px}.thanks__logo img{max-width:100px}}@media(max-width: 580px){.thanks__title--reg{font-size:36px;margin:48px}.thanks__check-img img{max-width:32px}.thanks__check-desc{font-size:16px;margin-top:0}}@media(max-width: 520px){.thanks__title--reg{font-size:32px;margin:48px}.thanks__check-desc{font-size:14px;margin-top:0}}@media(max-width: 480px){.thanks__title--reg{font-size:28px;margin:40px}.thanks__logo img{max-width:80px}}@media(max-width: 400px){.thanks__title--reg{font-size:24px;margin:40px}.thanks__logo img{max-width:72px}.thanks__check-img img{max-width:24px}}@media(max-width: 360px){.thanks__title--reg{font-size:22px;margin:32px}}@media(max-width: 1580px){.section__title{font-size:56px}.section__desc{margin-top:32px;font-size:18px}.section__subtitle{margin-top:32px;font-size:28px}.section__list{margin-top:16px}.section__item{font-size:20px}.section__text{font-size:16px;line-height:1.5}.section__logo img{max-width:140px}.section .container{max-width:990px;padding:0 40px}.section{margin:40px 0}}@media(max-width: 1420px){.section__title{font-size:48px}.section__logo{display:none}}@media(max-width: 800px){.section__title{font-size:40px}.section__subtitle{font-size:24px}.section__item{font-size:18px}.section .container{padding:0 30px}.section{margin:30px 0}}@media(max-width: 720px){.section__desc{margin-top:24px;font-size:16px}.section__title{font-size:36px}.section__subtitle{font-size:20px}.section__item{font-size:16px}.section__subtitle{margin-top:24px}}@media(max-width: 580px){.section__title{font-size:32px}.section__subtitle{font-size:18px}}@media(max-width: 540px){.section__title{font-size:28px}.section .container{padding:0 20px}.section{margin:20px 0}}@media(max-width: 480px){.section__title{font-size:24px}}@media(max-width: 370px){.section__title{font-size:22px}}
</style>

<style>
	.mfp-bg,.mfp-container,.mfp-wrap{left:0;top:0;width:100%;height:100%}.mfp-container:before,.mfp-content{display:inline-block;vertical-align:middle}.mfp-bg{z-index:1042;overflow:hidden;position:fixed;background:#0b0b0b;opacity:.8}.mfp-wrap{z-index:1043;position:fixed;outline:0!important;-webkit-backface-visibility:hidden}.mfp-container{text-align:center;position:absolute;padding:0 8px;box-sizing:border-box}.mfp-container:before{content:'';height:100%}.mfp-align-top .mfp-container:before,.mfp-loading.mfp-figure,.mfp-s-error .mfp-content,.mfp-s-ready .mfp-preloader{display:none}.mfp-content{position:relative;margin:0 auto;text-align:left;z-index:1045}.mfp-ajax-holder .mfp-content,.mfp-inline-holder .mfp-content{width:100%;cursor:auto}.mfp-ajax-cur{cursor:progress}.mfp-zoom-out-cur,.mfp-zoom-out-cur .mfp-image-holder .mfp-close{cursor:-moz-zoom-out;cursor:-webkit-zoom-out;cursor:zoom-out}.mfp-gallery .mfp-image-holder .mfp-figure,.mfp-zoom{cursor:pointer}.mfp-zoom{cursor:-webkit-zoom-in;cursor:-moz-zoom-in;cursor:zoom-in}.mfp-auto-cursor .mfp-content{cursor:auto}.mfp-arrow,.mfp-close,.mfp-counter,.mfp-preloader{-webkit-user-select:none;-moz-user-select:none;user-select:none}.mfp-hide{display:none!important}.mfp-preloader{color:#ccc;position:absolute;top:50%;width:auto;text-align:center;margin-top:-.8em;left:8px;right:8px;z-index:1044}.mfp-close,.mfp-preloader a:hover{color:#fff}.mfp-preloader a{color:#ccc}button.mfp-arrow,button.mfp-close{overflow:visible;cursor:pointer;background:0 0;border:0;-webkit-appearance:none;display:block;outline:0;padding:0;z-index:1046;box-shadow:none;touch-action:manipulation}.mfp-figure:after,.mfp-iframe-scaler iframe{box-shadow:0 0 8px rgba(0,0,0,.6);position:absolute;left:0}button::-moz-focus-inner{padding:0;border:0}.mfp-close{width:44px;height:44px;line-height:44px;position:absolute;right:0;top:0;text-decoration:none;text-align:center;opacity:.65;padding:0 0 18px 10px;font-style:normal;font-size:28px;}.mfp-arrow:focus,.mfp-arrow:hover,.mfp-close:focus,.mfp-close:hover{opacity:1}.mfp-close:active{top:1px}.mfp-close-btn-in .mfp-close{color:#333}.mfp-iframe-holder .mfp-close,.mfp-image-holder .mfp-close{color:#fff;right:-6px;text-align:right;padding-right:6px;width:100%}.mfp-counter{position:absolute;top:0;right:0;color:#ccc;font-size:12px;line-height:18px;white-space:nowrap}.mfp-figure,img.mfp-img{line-height:0}.mfp-arrow{position:absolute;opacity:.65;margin:-55px 0 0;top:50%;padding:0;width:90px;height:110px;-webkit-tap-highlight-color:transparent}.mfp-arrow:active{margin-top:-54px}.mfp-arrow:after,.mfp-arrow:before{content:'';display:block;width:0;height:0;position:absolute;left:0;top:0;margin-top:35px;margin-left:35px;border:inset transparent}.mfp-arrow:after{border-top-width:13px;border-bottom-width:13px;top:8px}.mfp-arrow:before{border-top-width:21px;border-bottom-width:21px;opacity:.7}.mfp-arrow-left{left:0}.mfp-arrow-left:after{border-right:17px solid #fff;margin-left:31px}.mfp-arrow-left:before{margin-left:25px;border-right:27px solid #3f3f3f}.mfp-arrow-right{right:0}.mfp-arrow-right:after{border-left:17px solid #fff;margin-left:39px}.mfp-arrow-right:before{border-left:27px solid #3f3f3f}.mfp-iframe-holder{padding-top:40px;padding-bottom:40px}.mfp-iframe-holder .mfp-content{line-height:0;width:100%;max-width:900px}.mfp-image-holder .mfp-content,img.mfp-img{max-width:100%}.mfp-iframe-holder .mfp-close{top:-40px}.mfp-iframe-scaler{width:100%;height:0;overflow:hidden;padding-top:56.25%}.mfp-iframe-scaler iframe{display:block;top:0;width:100%;height:100%;background:#000}.mfp-figure:after,img.mfp-img{width:auto;height:auto;display:block}img.mfp-img{box-sizing:border-box;padding:40px 0;margin:0 auto}.mfp-figure:after{content:'';top:40px;bottom:40px;right:0;z-index:-1;background:#444}.mfp-figure small{color:#bdbdbd;display:block;font-size:12px;line-height:14px}.mfp-figure figure{margin:0}.mfp-bottom-bar{margin-top:-36px;position:absolute;top:100%;left:0;width:100%;cursor:auto}.mfp-title{text-align:left;line-height:18px;color:#f3f3f3;word-wrap:break-word;padding-right:36px}@media screen and (max-width:800px) and (orientation:landscape),screen and (max-height:300px){.mfp-img-mobile .mfp-image-holder{padding-left:0;padding-right:0}.mfp-img-mobile .mfp-bottom-bar:empty,.mfp-img-mobile img.mfp-img{padding:0}.mfp-img-mobile .mfp-figure:after{top:0;bottom:0}.mfp-img-mobile .mfp-figure small{display:inline;margin-left:5px}.mfp-img-mobile .mfp-bottom-bar{background:rgba(0,0,0,.6);bottom:0;margin:0;top:auto;padding:3px 5px;position:fixed;box-sizing:border-box}.mfp-img-mobile .mfp-counter{right:5px;top:3px}.mfp-img-mobile .mfp-close{top:0;right:0;width:35px;height:35px;line-height:35px;background:rgba(0,0,0,.6);position:fixed;text-align:center;padding:0}}@media all and (max-width:900px){.mfp-arrow{-webkit-transform:scale(.75);transform:scale(.75)}.mfp-arrow-left{-webkit-transform-origin:0;transform-origin:0}.mfp-arrow-right{-webkit-transform-origin:100%;transform-origin:100%}.mfp-container{padding-left:6px;padding-right:6px}}
</style>

<style>
	.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}
</style>

<style>
	/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-0.25em}sup{top:-0.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}button,[type=button],[type=reset],[type=submit]{-webkit-appearance:button}button::-moz-focus-inner,[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring,[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}.popup__item{font-weight:500}.popup__subtitle span,.popup__item span,.header__link.unique,body{font-weight:400}.start__item{font-weight:400;font-style:italic}.title__link,.header__item{font-weight:600}h1,h2,h3,h4,h5,h6{margin:0}* p{margin:0;padding:0}* ul,* li,* ol{padding:0;margin:0;list-style:none}* button{font-family:inherit;outline:none;cursor:pointer}* input,* textarea{font-family:inherit;outline:none}*,*:after,*:before{-webkit-box-sizing:border-box;box-sizing:border-box}* a{display:inline-block;text-decoration:none;color:inherit}body{font-size:16px;color:#000;margin:0}:root{--header-height: 98px;--header-wrapper: 16px;--join-back: 28px}.container{max-width:1260px;margin:0 auto;padding:0 60px}.header .container{max-width:1920px;padding:0 40px}.header__inner{height:var(--header-height);position:relative}.header{width:100%;position:fixed;top:0;z-index:999;background-color:#fff;max-height:var(--header-height);min-height:var(--header-height);height:var(--header-height);-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header.sticky{-webkit-box-shadow:0px 6px 15px 0px rgba(0,0,0,.06);box-shadow:0px 6px 15px 0px rgba(0,0,0,.06)}.header__logo{height:calc(var(--header-height) - var(--header-wrapper)*2);display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex}.header__logo-img{display:block;max-width:100%;max-height:100%}.header__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:var(--header-wrapper) 0;max-height:var(--header-height)}.header__list{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.header__item{font-size:16px;margin-right:26px}.header__item:last-child{margin-right:0}.header__link{-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;position:relative;line-height:150%}.header__link.default::after{content:"";position:absolute;right:-10%;left:-10%;bottom:-8px;margin:0 auto;width:0%;height:2px;background-color:#3478f6;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header__link:hover{color:#3478f6}.header__link:hover::after{width:120%}.header__link.unique{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#007bff;border-radius:5px;color:#fff;line-height:100%;padding:15px 22px;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.header__link.unique:hover{background-color:#fc0}.header__menu{display:none}.ham{cursor:pointer;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-transition:-webkit-transform 400ms;transition:-webkit-transform 400ms;-o-transition:transform 400ms;transition:transform 400ms;transition:transform 400ms,-webkit-transform 400ms;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.hamRotate.active{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.hamRotate180.active{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.line{fill:none;-webkit-transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;-o-transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;transition:stroke-dasharray 400ms,stroke-dashoffset 400ms;stroke:#000;stroke-width:5.5;stroke-linecap:round}.ham4 .top{stroke-dasharray:40 121}.ham4 .bottom{stroke-dasharray:40 121}.ham4.active .top{stroke-dashoffset:-68px}.ham4.active .bottom{stroke-dashoffset:-68px}.title .container{margin:0;padding:0 280px}.title__wrap{padding-top:64px;min-height:calc(80vh - var(--header-height));background-size:cover;background-repeat:no-repeat;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.title__arrow{min-height:20vh;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.title__desc{max-width:534px;font-size:16px;color:#fff;margin-top:16px;line-height:1.5}.title__suptitle{color:#fff;font-size:24px;line-height:1;margin-bottom:16px}.title__subtitle{font-size:48px;line-height:1;color:#fff !important;text-shadow:2px 4px 4px rgba(0,0,0,.28)}.title__links{margin-top:32px}.title__link.now{font-size:16px;background-color:#fff;color:#ff0d71;padding:15px 30px;border-radius:100px 100px 100px 100px;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;border:2px solid #fff}.title__link.now:hover{background-color:#fff;background-color:rgba(0,0,0,0);color:#fff;-webkit-box-shadow:0px 10px 16px -8px rgba(255,255,255,.8),5px 5px 15px 5px rgba(0,0,0,0);box-shadow:0px 10px 16px -8px rgba(255,255,255,.8),5px 5px 15px 5px rgba(0,0,0,0)}.title__link.now:active{-webkit-transform:scale(0.95);-ms-transform:scale(0.95);transform:scale(0.95)}.title__link.more{margin-left:16px;padding:15px 30px;color:#fff;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;border:2px solid #fff;border-radius:100px 100px 100px 100px}.title__link.more:hover{background-color:#fff;background-color:#fff;color:#ff0d71;-webkit-box-shadow:0px 10px 16px -8px rgba(255,255,255,.8),5px 5px 15px 5px rgba(0,0,0,0);box-shadow:0px 10px 16px -8px rgba(255,255,255,.8),5px 5px 15px 5px rgba(0,0,0,0)}.title__link.more:active{-webkit-transform:scale(0.95);-ms-transform:scale(0.95);transform:scale(0.95)}.title__arrow-link{-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;-webkit-animation:title-arrow forwards infinite linear 1.5s;animation:title-arrow forwards infinite linear 1.5s}.title__arrow-link svg{display:block}.title__arrow-link:hover{margin-top:12px;opacity:.8}@-webkit-keyframes title-arrow{0%{opacity:0;margin-top:0}25%{opacity:1}75%{opacity:1}100%{margin-top:32px;opacity:0}}@keyframes title-arrow{0%{opacity:0;margin-top:0}25%{opacity:1}75%{opacity:1}100%{margin-top:32px;opacity:0}}.section-title{font-size:36px;text-align:center;margin:0 auto;line-height:1.5}.section-title-little{font-size:28px;margin:0 auto;line-height:1.5}.section-title-little.text-decor.big::before{top:24px}.section-title-little.text-decor.small::before{top:24px}.section-title-little.text-decor::after{height:14px;top:24px}.text-decor{position:relative;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content}.text-decor.big::before{position:absolute;content:"";left:-40px;bottom:0;width:172px;height:30px;top:30px;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/text-decoration-big.png);z-index:-1}.text-decor.small::before{position:absolute;content:"";left:-22px;bottom:0;width:86px;height:28px;top:30px;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/text-decoration-small.png);z-index:-1}.text-decor::after{position:absolute;content:"";left:0;right:0;bottom:0;width:100%;height:15px;top:30px;background-color:#ffd400;z-index:-1}.start{padding-top:60px}.start__line{background:url("<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-line-yellow.jpg");width:183px;height:13px;margin:0 auto;margin-top:32px;border:none}.start__desc{font-size:18px;text-align:center;margin-top:36px;line-height:1.5;max-width:1020px;margin-right:auto;margin-left:auto}.start__title{margin-bottom:64px}.start__wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-top:64px}.start__wrap .start__block{max-width:550px}.start__block-title{font-size:32px;line-height:1.5;text-align:center;margin-bottom:24px}.start__item{font-size:18px;line-height:1.5;margin:16px 0;padding-left:36px;position:relative;color:#54595f}.start__item::before{position:absolute;left:0;content:"";top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:18px;height:18px;background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-icon-pink.svg) center/contain no-repeat}.how__block{background-color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;max-width:515px;padding:30px;padding-top:0;border:2px solid rgba(141,141,141,.1);-webkit-box-shadow:4px 4px 4px 4px rgba(141,141,141,.25);box-shadow:4px 4px 4px 4px rgba(141,141,141,.25);border-radius:10px;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.how__block img{margin:0 auto}.how__block:first-child{margin-right:30px}.how__block:hover{-webkit-box-shadow:none;box-shadow:none}.how{margin-top:80px}.how__wrap{margin-top:161px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.how__subtitle{margin-top:24px;font-size:26px}.how__desc{margin-top:12px;font-size:18px;color:rgba(0,0,0,.5);line-height:1.5}.how__image{margin-top:-97px !important}.num{margin-top:128px;background-color:#2a59f2;color:#fff;padding:32px 0 48px 0}.num__numbers{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-top:32px}.num__count{color:#ffd400;font-size:68px;text-align:center}.num__desc{font-size:18px;text-align:center}.step{margin-top:128px}.step__wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.step__title{margin-bottom:80px}.start__list.step__list .start__item::before{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/star-pink.svg) center/contain no-repeat}.start__list.nfu .start__item:nth-child(2):before{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/inbox-icon-pink.svg) center/contain no-repeat}.start__list.nfu .start__item:nth-child(3):before{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock-icon-pink.svg) center/contain no-repeat}.start__list.nfu .start__item:nth-child(4):before{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/happy-icon-pink.svg) center/contain no-repeat}.step__title{max-width:none}.apply__item-link{background-color:#ffd400;padding:0 6px}.apply__link,.contact__link{margin-top:16px;min-width:160px;text-align:center;font-size:16px;background-color:#2a59f2;color:#fff;padding:15px 30px;border-radius:100px;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;-webkit-box-shadow:0px 12px 16px -7px #1c35f1,5px 5px 15px 5px rgba(42,89,242,0);box-shadow:0px 12px 16px -7px #1c35f1,5px 5px 15px 5px rgba(42,89,242,0)}.apply__link:hover,.contact__link:hover{color:#fff;background-color:#1c35f1;-webkit-box-shadow:0px 12px 16px -7px #2a59f2,5px 5px 15px 5px rgba(42,89,242,0);box-shadow:0px 12px 16px -7px #2a59f2,5px 5px 15px 5px rgba(42,89,242,0)}.apply__link:active,.contact__link:active{-webkit-transform:scale(0.95);-ms-transform:scale(0.95);transform:scale(0.95)}.apply__link svg,.contact__link svg{max-width:18px;margin-right:8px;margin-bottom:4px}.contact__link{margin-top:auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;min-width:192px;margin-right:auto;margin-left:auto}.apply__img-link img{display:block}.apply__wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-top:96px}.start__list.apply__list .start__item::before{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrows-pink.svg) center/contain no-repeat;width:24px;height:36px}.apply__item{font-size:22px}.apply{margin-top:128px}.feed{margin-top:128px}.feed__slider{margin-top:32px}.slider__button{position:absolute;z-index:555;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);cursor:pointer;display:block;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.slider__button circle,.slider__button path{-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.slider__button:hover circle{fill:rgba(0,0,0,0)}.slider__button:hover path{fill:#ffd400}.slider__button.left{left:-60px}.slider__button.right{right:-60px}.slick-dots{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.slick-dots button{font-size:0;border:none;width:16px !important;height:16px !important;margin:0 8px !important;background-color:#ff0d70 !important;border-radius:50%;border:1px solid #ff0d70 !important;-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}.slick-dots .slick-active button{background-color:#fff !important}.feed__slide{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;border:2px solid rgba(196,196,196,.25);-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;-webkit-box-shadow:4px 4px 4px 4px rgba(0,0,0,.25);box-shadow:4px 4px 4px 4px rgba(0,0,0,.25);border-radius:10px;margin:30px;margin-top:150px}.feed__slide:hover{-webkit-box-shadow:none;box-shadow:none}.slick-track{-webkit-box-align:stretch !important;-ms-flex-align:stretch !important;align-items:stretch !important}.slick-track .slick-slide{display:-webkit-box;display:-ms-flexbox;display:flex;height:auto}.feed__block img{border-radius:50%;width:200px;height:200px;max-width:200px;max-height:200px;-o-object-fit:cover;object-fit:cover;margin:0 auto;margin-top:-100px}.feed__desc{color:rgba(0,0,0,.5);line-height:1.4;font-size:18px;padding:24px;text-align:center}.feed__slider{max-width:1090px;margin-right:auto;margin-left:auto;padding:30px}.slick-track{-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important}.feed hr{margin:0;border:none;height:2px;width:40px;background-color:#2575fc;margin-bottom:35px}.feed__name{margin-top:16px;font-size:24px;padding:0 16px;margin-bottom:8px;text-align:center;line-height:1.36}.feed__spec{display:block;text-align:center;font-size:18px;color:rgba(0,0,0,.5);line-height:1.36}.checkbox__container input{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.checkmark{position:absolute;top:0;left:0;height:32px;width:32px;background-color:#fff;border-radius:8px;border:2px solid #4d4d4d}.checkbox__container:hover input~.checkmark{background-color:#efefef}.checkbox__container input:checked~.checkmark::after{background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-icon-blue.svg) center/contain no-repeat;content:"";position:absolute;right:-8px;top:-6px;width:32px;height:32px}.checkmark:after{content:"";position:absolute;display:none;background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/check-icon-gray.svg) center/contain no-repeat}.checkbox__container input:checked~.checkmark:after{display:block}.checkbox__container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative;padding-left:48px;cursor:pointer;font-size:22px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;min-height:32px;color:#4d4d4d}.date__checkbox{max-width:450px;margin-right:auto;margin-left:auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.date__form select{-moz-appearance:none;-webkit-appearance:none;appearance:none;border:2px solid #4d4d4d;border-radius:8px;font-size:20px;line-height:1.2;color:#4d4d4d;padding:12px 30px 12px 24px;outline:none;width:100%}.date__select-wrap{display:none;position:relative}.date__select-wrap::after{position:absolute;top:0;content:"";bottom:0;margin:auto 0;right:24px;width:29px;height:15px;background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/select-arrow-icon.svg) center/contain no-repeat}.date__form{padding-top:32px;max-width:580px;margin:0 auto}.date__selects{margin-top:32px}.weekday{display:none}.date__content{margin:0 auto;margin-top:48px;margin-bottom:32px;max-width:580px;text-align:center;display:none;border:1px solid rgba(141,141,141,.01);-webkit-box-shadow:4px 4px 4px 4px rgba(141,141,141,.25);box-shadow:4px 4px 4px 4px rgba(141,141,141,.25);border-radius:10px;padding:24px 40px}.date__content.active{display:block}.date__program{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-top:0;line-height:1;margin-bottom:32px;font-size:32px}.date__program svg{margin-right:16px;display:block}.date__text{font-size:18px;margin:12px 0;line-height:1.36}.date__notify{text-shadow:0px 4px 10px #ffbe55;font-size:24px;line-height:146%;text-align:center;margin-top:48px;margin-bottom:32px;text-transform:uppercase}.date__btn{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;font-size:18px;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;margin:0 auto;padding:16px 32px;background-color:#ff0d71;color:#fff;border:2px solid #ff0d71;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;border-radius:100px 100px 100px 100px;min-width:216px}.date__btn:hover{background-color:rgba(0,0,0,0);color:#ff0d71;-webkit-box-shadow:0px 10px 13px -7px #ff0d71,5px 5px 15px 5px rgba(0,0,0,0);box-shadow:0px 10px 13px -7px #ff0d71,5px 5px 15px 5px rgba(0,0,0,0)}.date__btn:active{-webkit-transform:scale(0.95);-ms-transform:scale(0.95);transform:scale(0.95)}.date__title{text-transform:uppercase}.date__desc{margin-top:48px;font-size:20px;line-height:1.2;color:#3d3d3d;text-align:center}.date{margin-top:80px}.date__text a{color:#2a94f4;border-bottom:1px solid #2a94f4;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out}.date__text a:hover{opacity:.8;border-bottom:1px solid rgba(0,0,0,0)}.weekend.active,.weekday.active{display:block}.mfp-bg{background-color:rgba(0,0,0,.25);-webkit-backdrop-filter:blur(1px);backdrop-filter:blur(1px)}.mfp-close{display:none !important}.mfp-container{padding:0}.popup{position:relative;max-width:912px;min-width:912px;margin:0 auto;background:#fff;border:1px solid #d3d3d3;-webkit-box-shadow:0px 1px 10px rgba(0,0,0,.25);box-shadow:0px 1px 10px rgba(0,0,0,.25);-webkit-backdrop-filter:blur(11px);backdrop-filter:blur(11px);border-radius:10px;padding:60px 100px}.popup__title{font-size:32px;position:relative;padding-left:63px;margin-bottom:25px}.popup__title::before{position:absolute;content:"";left:0;top:0;bottom:0;margin:auto 0;width:43px;height:43px;background:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/popup-icon.png)}.popup__block{margin-top:12px;padding:16px 28px;background:#fff;border:3px solid #ffbe55;border-radius:10px}.popup__block.pink{border:3px solid #2a94f4}.popup-modal-dismiss{position:absolute;right:20px;top:20px}.popup__list{margin-top:24px}.popup__item{list-style:disc;margin-left:32px;line-height:1.3;margin-top:4px;margin-bottom:4px}.popup__desc{color:#4d4d4d;margin-top:4px;line-height:1.25}.popup__subtitle span{font-size:16px}.popup__subtitle{font-size:20px;line-height:1.25}.popup-modal-dismiss svg{display:block}* img{max-width:100%}.contact__block{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;max-width:520px;text-align:center}.contact__block:nth-child(1){margin-right:64px}.contact__block img{display:block;max-width:350px;height:250px;-o-object-fit:cover;object-fit:cover;margin:0 auto;border-radius:8px}.contact__wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.contact__subtitle{color:#2a59f2;font-size:28px;margin-top:24px}.contact__desc{font-size:18px;margin-top:16px;display:block;line-height:1.5}.contact__text{font-size:16px;margin-top:16px;line-height:1.5;color:#58566b;margin-bottom:16px}.contact{margin-top:128px}.contact__wrap{margin-top:96px}.sharing{margin-top:128px;margin-bottom:128px}.ques__box{border:1px solid #c4c4c4;border-radius:10px;padding:0 24px;background-color:#fff;margin:24px 0}.ques__subtitle{font-size:24px;font-weight:500;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:12px 0;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.ques__subtitle svg path{-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}.ques__subtitle path.minus{opacity:0}.ques__subtitle:hover{color:#177cd9}.ques__subtitle:hover svg path{stroke:#177cd9}.ques__subtitle.active{color:#177cd9}.ques__subtitle.active svg path{opacity:0;stroke:#177cd9}.ques__subtitle.active svg path.minus{opacity:1}.ques__subtitle.active~.ques__desc{max-height:300px;padding-bottom:24px}.ques__desc{-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;max-height:0;padding:0;overflow:hidden;font-size:18px;padding-right:60px}.ques__desc p{margin-bottom:12px}ol.ques__list li{list-style:decimal;margin:6px 0;margin-left:24px;line-height:1.4}ul.ques__list li{list-style:disc;margin:6px 0;margin-left:24px;line-height:1.4}.ques__desc a{color:#177cd9 !important;border-bottom:1px solid #177cd9;-webkit-transition:.25s ease-in-out;-o-transition:.25s ease-in-out;transition:.25s ease-in-out;line-height:1.4}.ques__desc a:hover{color:#409cd9;border-bottom:1px solid rgba(0,0,0,0)}.ques__title{margin:80px 0;margin-right:auto;margin-left:auto}.ques .container{max-width:966px}
	@media(max-width: 1535px){:root{--header-height: 82px;--header-wrapper: 8px}}@media(max-width: 1024px){.header__menu{display:block}.header__nav{width:100%;position:absolute;top:var(--header-height);right:-100%;background-color:#fff;padding:36px;-webkit-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out;-webkit-box-shadow:0px 8px 12px -6px rgba(0,0,0,.35),5px 5px 15px 5px rgba(0,0,0,0);box-shadow:0px 8px 12px -6px rgba(0,0,0,.35),5px 5px 15px 5px rgba(0,0,0,0)}.header__nav.active{right:0}.header__list{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.header__item{text-transform:uppercase;margin-right:0;font-size:28px;margin-top:16px}.header__item:first-child{margin-top:0}.header .container{padding:0 20px}.header__logo{margin-left:11px}}@media(max-width: 768px){.header .container{padding:0 15px}.header__item{font-size:24px}}@media(max-width: 640px){.header .container{padding:0 10px}}@media(max-width: 520px){.header__item{font-size:22px}:root{--header-height: 64px;--header-wrapper: 5px}.header__menu{width:54px;height:54px}.header .container{padding:0 5px}}@media(max-width: 420px){.header__item{font-size:20px}}@media(max-width: 1640px){.title .container{margin:0;padding:0 140px}.title__arrow svg{max-width:84px}}@media(max-width: 1380px){.title__arrow{min-height:15vh}.title__wrap{min-height:calc(85vh - var(--header-height))}.title__arrow svg{max-width:72px}.title .container{margin:0;padding:0 80px}}@media(max-width: 1280px){.title .container{margin:0;padding:0 60px}}@media(max-width: 1024px){.title .container,.container{padding:0 40px}}@media(max-width: 768px){.title .container{margin:0 auto;text-align:center}}@media(max-width: 640px){.container,.title .container{padding:0 30px}}@media(max-width: 520px){.container,.title .container{padding:0 20px}.title__links{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.title__link{max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;margin:0 auto}.title__link.more{margin-top:16px;margin-left:auto}}@media(max-width: 480px){.title__suptitle{font-size:20px}.title__subtitle{font-size:40px}}@media(max-width: 400px){.title__suptitle{font-size:18px}.title__subtitle{font-size:36px}.title__desc{font-size:14px}}@media(max-width: 340px){.title__subtitle{font-size:32px}}@media(max-width: 1260px){.start__block img{max-width:500px}.start__block-title{font-size:28px}}@media(max-width: 1024px){.start__wrap{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.start__block-title{margin-top:32px}.section-title{font-size:32px}.text-decor::after{height:14px;top:30px}.text-decor.big::before{left:-36px;height:26px;top:26px}.how__wrap{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.how__block:first-child{margin-right:0;margin-bottom:24px}.how__wrap{margin-top:0}.how{margin-top:32px}.how__block{margin:0 auto;margin-top:140px}.how__block img{max-width:160px}.how__block:first-child{margin-right:auto}.start__title{margin-bottom:24px}.start__desc{margin-top:0}.how__subtitle{font-size:24px}.how__desc{font-size:16px}}@media(max-width: 768px){.section-title{font-size:28px}.start__block-title{font-size:28px}.text-decor::after{height:12px;top:24px}.text-decor.big::before{left:-22px;height:24px;top:24px}.text-decor.small::before{top:24px}.start__desc{margin-top:24px}.start__wrap{margin-top:24px}.start__block-title{margin-top:24px}}@media(max-width: 678px){.section-title{font-size:24px;padding:0 20px}.start__block-title{font-size:24px}.text-decor::after{height:12px;top:20px;left:20px;right:20px;width:calc(100% - 40px)}.text-decor.big::before{left:0;height:22px;top:20px}.text-decor.small::before{top:20px;left:0;height:20px}.how{margin-top:24px}}@media(max-width: 540px){.section-title{font-size:20px;padding:0 10px;line-height:1.75}.start__block-title{font-size:20px}.text-decor::after{height:13px;top:18px;left:20px;right:20px;width:calc(100% - 30px)}.text-decor.big::before{left:0;height:20px;top:18px}.start__item{font-size:16px}.text-decor.small::before{top:18px;left:-12px;height:20px}.text-decor.small::after{left:0;right:0;width:100%}.how__subtitle{font-size:16px}.how__desc{font-size:14px}}@media(max-width: 480px){.start__desc{margin-top:16px}.section-title{font-size:18px}.start__block-title{font-size:18px}.start__desc{margin-top:8px;font-size:14px}.start__block img{max-width:80%}.start__block:nth-child(1){display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}@media(max-width: 420px){.start__item{font-size:14px;margin:12px 0}}@media(max-width: 1260px){.num__count{font-size:56px}}@media(max-width: 1024px){.num__count{font-size:48px}}@media(max-width: 992px){.num__count{font-size:40px}.num__desc{font-size:16px}}@media(max-width: 768px){.num__count{font-size:32px}.num__desc{font-size:14px}}@media(max-width: 678px){.num__numbers{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;gap:24px;margin-top:24px}.num__count{font-size:40px}.num__desc{font-size:16px}}@media(max-width: 540px){.num__count{font-size:32px}.num__desc{font-size:14px}}@media(max-width: 1024px){.num{margin-top:96px}}@media(max-width: 678px){.num{margin-top:64px}.num .section-title{line-height:1.5;padding:0}}@media(max-width: 1260px){.step__block img{max-width:500px}.section-title-little{font-size:24px}}@media(max-width: 1024px){.step{margin-top:80px}.step__wrap{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.step__block:nth-child(2){margin-top:32px}.step__title{margin-bottom:48px;text-align:center}}@media(max-width: 678px){.step__block img{max-width:80%}.step__block:nth-child(2){margin-top:32px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.section-title-little{font-size:20px}.section-title-little.text-decor::after{height:12px;top:20px;left:0;right:0;width:100%}.section-title-little.text-decor.big::before{top:20px;left:-24px}}@media(max-width: 540px){.section-title-little{font-size:18px}.section-title-little.text-decor::after{height:12px;top:18px}.section-title-little.text-decor.big::before{top:18px}}@media(max-width: 420px){.section-title-little{font-size:16px}.section-title-little.text-decor::after{top:14px}.section-title-little.text-decor.big::before{top:14px}.step__title{margin-bottom:40px}}@media(max-width: 1260px){.apply__img-link img{max-width:440px}.apply__item{font-size:18px}}@media(max-width: 1024px){.apply{margin-top:80px}.apply__wrap{margin-top:48px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.apply__block:nth-child(2){margin-top:32px}}@media(max-width: 678px){.apply__img-link img{max-width:80%}.apply__img-link{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}@media(max-width: 540px){.apply__item{font-size:16px}.apply__wrap{margin-top:32px}.apply__block:nth-child(2){margin-top:24px}}@media(max-width: 420px){.apply__item{font-size:14px}}@media(max-width: 1260px){.feed__slider{padding:0}.slider__button.right{right:-40px}.slider__button.left{left:-40px}}@media(max-width: 1024px){.feed__slider{padding:0}.feed .container{padding:0px 60px}.feed__desc{line-height:1.5}}@media(max-width: 580px){.feed__desc{padding:20px}.feed .container{padding:0px 50px}.slider__button.right{right:-36px}.slider__button.left{left:-36px}.feed__slide{margin:30px;margin-top:120px}.feed__block img{max-width:180px;max-height:180px;margin-top:-90px}.feed__name{font-size:20px}.feed__spec,.feed__desc{font-size:16px}.feed__slide{-webkit-box-shadow:none;box-shadow:none}}@media(max-width: 480px){.feed__slide{margin:20px;margin-top:80px}.feed__block img{max-width:140px;max-height:140px;margin-top:-70px}.feed__name{padding: 0 8px;font-size:16px}.feed__spec,.feed__desc{font-size:14px}.slider__button{max-height:80px}}@media(max-width: 425px){.feed .container{padding:0px 50px}.slider__button{max-height:72px}.feed__desc{padding:16px}.feed__slide{margin:10px;margin-top:80px}}@media(max-width: 400px){.feed .container{padding:0px 40px}.slider__button{max-height:60px}.slider__button.right{right:-36px}.slider__button.left{left:-36px}}@media(max-width: 360px){.feed__desc{padding:12px;font-size:12px}.feed .container{padding:0px 30px}.slider__button.right{right:-28px}.slider__button.left{left:-28px}}@media(max-width: 1024px){.date{margin-top:80px}.checkbox__container{font-size:18px;padding-left:40px;min-height:28px}.checkbox__container input:checked~.checkmark::after{width:28px;height:28px}.checkmark{height:28px;width:28px;display:block;border-radius:8px}.date__select{font-size:18px}.date__program{margin-bottom:32px;font-size:28px}.date__form select{font-size:18px}.date__text{font-size:18px}.date__notify{font-size:22px}.date__desc{margin-top:32px;font-size:18px}}@media(max-width: 992px){.date__title{text-align:center;margin-left:auto;margin-right:auto;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content}.date__form{max-width:320px}}@media(max-width: 678px){.feed{margin-top:64px}.date{margin-top:64px}.step{margin-top:64px}.date__program{font-size:24px;margin-bottom:24px}.date__text{margin:10px 0}}@media(max-width: 540px){.date{margin-top:48px}.date__desc{margin-top:24px}.date__form{padding-top:24px}.date__selects{margin-top:24px}.date__notify{font-size:20px;margin-top:40px;margin-bottom:24px}.date .text-decor.big::before{width:86px;height:22px;left:-20px;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/text-decoration-small.png)}}@media(max-width: 480px){.date__desc{font-size:16px}.checkbox__container{font-size:16px;padding-left:36px;min-height:24px}.checkbox__container span{line-height:1}.checkbox__container input:checked~.checkmark::after{width:24px;height:24px}.checkmark{height:24px;width:24px;display:block;border-radius:8px}.date__select{font-size:18px}.date__notify{font-size:18px}.date__form{max-width:300px}.date__form select{font-size:16px;padding:10px 20px}.date__program{font-size:20px}.date__text{font-size:16px;margin:8px 0}}@media(max-width: 1024px){.popup{max-width:760px;min-width:760px}.popup__title{font-size:28px}}@media(max-width: 768px){.popup{padding:40px;max-width:540px;min-width:540px}.popup__subtitle{font-size:16px}.popup__list{margin-top:16px}.popup__title{font-size:24px}.popup__block{padding:16px 20px;border-radius:8px}}@media(max-width: 580px){.popup{padding:30px;max-width:420px;min-width:100%}.popup-modal-dismiss svg{max-width:32px;max-height:32px}.popup__title{font-size:18px}.popup__item{margin-top:8px;margin-bottom:8px;line-height:1.36}.popup__list{margin-top:24px}.popup__desc{color:#4d4d4d;margin-top:12px}.popup__item{margin-left:24px}}@media(max-width: 380px){.popup__title{font-size:16px;padding-left:60px}.popup{padding:20px}.popup__block{padding:16px}.popup__subtitle{font-size:14px}.popup__subtitle span{font-size:14px}.popup__item{font-size:14px;margin-left:24px}.popup__desc{font-size:14px}.popup__title{font-size:14px;padding-left:54px;padding-right:20px}.popup-modal-dismiss{right:16px;top:16px}}@media(max-width: 1024px){.start__list.nfu{max-width:400px}.apply__link{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-right:auto;margin-left:auto;max-width:-webkit-fit-content;max-width:-moz-fit-content;max-width:fit-content;margin-top:32px}.contact__wrap{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.contact__block:nth-child(1){margin-right:0;margin-bottom:64px}.contact__wrap{margin-top:64px}.sharing,.contact{margin-top:80px}.date__form{padding-top:0}}@media(max-width: 768px){.start__title{margin-bottom:32px}.start__line{margin-top:24px}.start__desc{font-size:16px}.contact__wrap{margin-top:32px}}@media(max-width: 678px){.sharing,.contact,.apply{margin-top:64px}.contact__subtitle{font-size:24px}.step__block:nth-child(2){margin-top:16px}.contact__subtitle{margin-top:16px}}@media(max-width: 540px){.date{margin-top:64px}}@media(max-width: 480px){.start__title{margin-bottom:24px}.contact__desc{font-size:16px}.contact__text{font-size:14px}.start__desc{font-size:14px;margin-top:16px}.start__line{margin:24px auto}.contact__block img{max-width:100%}}@media(max-width: 500px){.title__wrap{padding-top:0}.title__suptitle{text-shadow:2px 4px 4px rgba(0,0,0,.28)}}@media(max-width: 1024px){.ques__subtitle{font-size:22px}.ques__subtitle svg{margin-left:16px;max-width:36px;max-height:36px}}@media(max-width: 840px){.ques__subtitle{line-height:1.4;font-size:20px}.ques__subtitle svg{margin-left:16px;max-width:32px;max-height:32px}.ques__desc{font-size:16px}.ques__subtitle.active~.ques__desc{padding-bottom:12px}.ques__desc p{margin-bottom:8px;line-height:1.4}ol.ques__list li{margin:4px 0;margin-left:16px}ul.ques__list li{margin:4px 0;margin-left:24px}}@media(max-width: 580px){.ques__subtitle{font-size:18px}.ques__subtitle svg{margin-left:8px;max-width:30px;max-height:30px}.ques__desc{padding-right:28px}.ques__box{margin:16px 0}.ques__title{margin-top:60px;margin-bottom:50px}}@media(max-width: 480px){.ques__subtitle{font-size:16px}.ques__subtitle svg{max-width:28px;max-height:28px}.ques__desc{font-size:14px}.ques__subtitle.active~.ques__desc{max-height:420px}}@media(max-width: 360px){.ques__subtitle{font-size:14px}}@media(max-width: 1024px){.date__checkbox{margin-top:32px}.date__content{padding:32px}}@media(max-width: 678px){.how__block img{max-width:120px}.how__image{margin-top:-60px !important}.how__subtitle{font-size:20px}.how__block{margin:0 auto;margin-top:90px}}@media(max-width: 580px){.date__program svg{margin-right:8px;max-width:28px;max-height:28px}.date__text{font-size:16px}.date__program{font-size:20px}.date__content{padding:30px 20px}}@media(max-width: 480px){.how__block img{max-width:90px}.how__block{margin:0 auto;margin-top:100px}.how__block:nth-child(2){margin-top:70px}.how__subtitle{font-size:16px;margin-top:16px}.date__program{font-size:18px}.date__program svg{max-width:24px;max-height:24px}.date__content{padding:24px 16px}}@media(max-width: 360px){.date__program{font-size:16px}.date__program svg{max-width:20px;max-height:20px}}
</style>

<style>

	@media(min-width:1661px){
		.--hpwsdfsdfds{
			margin-top:32px !important;
		}
	}
	.sign{
		margin-top: 0 !important;
		margin-bottom: 0 !important;
	}
	@media(min-width:1025px){
		.apply__block:nth-child(2){
			margin-left: 60px;
		}
		.sign{
			border-radius: 32px;
		}
	}
	@media(max-width:1024px){
		.sign{
			border-radius: 24px;
		}
	}
	.popup__title{
		line-height:1.5;
	}
	.date__select-wrap::after{
		pointer-events: none;
	}
	.checkbox__container span{
		color: #000000 !important;
	}
	.mfp-wrap, .mfp-bg{
		z-index: 99999;
	}
	@media(max-width:620px){
		.title__wrap {
			padding-top: 0;
			background: #FF0D71 !important;
		}
	}
	@media(max-width:520px){
		.title__link{
			width: 100%;
			max-width:70%;
		}
	}
	.section-title, .date__btn{
		font-weight:700;
	}
	.date__select{
		background:#ffffff;
	}
	@media(max-width:840px){
		.ques__subtitle.active~.ques__desc {
			padding-bottom: 24px;
		}
	}
	@media(max-width:370px){
		.ques__box{
			padding: 0 20px;
		}
	}
</style>

<style>
	.hidden{
		display: none;
	}
	body {
		background: transparent !important;
		backdrop-filter: none !important;
	}
	label a{
		color: #FF0D71;
		font-weight: 700;
		transition: .2s ease-in-out;
	}
	label a:hover{
		color: #FF0D71;
		opacity: .9;
	}
	strong{
		color: #404040;
	}
	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	-webkit-appearance: none;
	margin: 0;
	}

	/* Firefox */
	input[type=number] {
	-moz-appearance: textfield;
	}
</style>

<style>
	.feed__desc{
		text-align: left !important;
	}
	.feed__desc.active > span{
		height: auto;
	}
	.feed__desc > span{
		display: block;
		height: 0;
		overflow: hidden;
		transition: 0.3s;
	}
	.feed__readmore{
		margin-top:4px !important;
		padding:0 !important;
		border:none !important;
		outline:none !important;
		background-color: transparent !important;
		background: transparent !important;
		color: #007BFF !important;
		transition: .3s ease-in-out;
	}
	.feed__readmore:hover{
		opacity: .8 !important;
	}
	.feed__readmore .read{
		display: inline;
	}
	.feed__readmore .hide{
		display: none;
	}
	.feed__readmore.active .read{
		display: none;
	}
	.feed__readmore.active .hide{
		display: inline;
	}
</style>

<style>
	.date__text--sm{
		font-size: 14px !important;
	}
	@media(min-width:581px){
		.date__text--sm{
			font-size: 16px !important;
		}
	}
	@media(min-width:1025px){
		.popup{
			margin-top:128px;
		}
	}
	@media(max-width:1024px){
		.popup{
			margin-top: 80px;
		}
	}
	@media(max-width:678px){
		.popup{
			margin-top: 64px;
		}
	}
	.popup__block.pink{
		border-color:#FF0D71;
	}
	@media(min-width:1025px){
		.ekit-wid-con .elementskit-btn::before {
			position: absolute;
			content: "";
			border-radius: inherit;
			-webkit-transition: all .4s ease;
			transition: all .4s ease;
			z-index: -1;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background-size: 102% 102%;
			opacity: 0;
		}
	}
	.date__select{
		padding-right:64px !important;
	}
	@media(max-width:992px){
		.date__select{
			font-size: 16px !important;
			border-radius: 16px !important;
			padding: 8px 16px !important;
			padding-right: 46px !important;
			color: #000000 !important;
		}
		.date__select-wrap::after {
			right: 16px;
			width: 22px;
			height: 12px;
			background: url(https://www.nobelnavigators.com/wp-content/themes/courselog/assets/images/icons/select-arrow-icon.svg) center/contain no-repeat;
		}
		.date__form {
			max-width: 380px;
		}
	}
	@media(max-width:540px){
		.date__form {
			max-width: 320px;
		}
		.date__select{
			font-size: 14px !important;
		}
	}

	input:autofill,
	input:autofill:hover, 
	input:autofill:focus, 
	input:autofill:active{
		box-shadow: 0 0 0 30px white inset !important;
	}
	input:-webkit-autofill,
	input:-webkit-autofill:hover, 
	input:-webkit-autofill:focus, 
	input:-webkit-autofill:active{
		-webkit-box-shadow: 0 0 0 30px white inset !important;
	}
	#form.submited{
		position: relative;
	}
	#form.submited::after{
		position: absolute;
		content: "";
		width: 100%;
		height: 100%;
		top:0;
		left:0;
		right:0;
		bottom:0;
	}
	@media(max-width:1660px) and (min-width:1025px){
		._form_element{
			margin-top:0 !important;
		}
	}
</style>

<main class="main">
	<section class="title">
		<div class="title__wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title_image.jpg);">
			<div class="container">
				<h2 class="title__suptitle">BUILD YOUR FUTURE WITH US
				</h2>
				<h1 class="title__subtitle">BECOME A NOBEL <br> INTERN!</h1>
				<p class="title__desc">Uncover new skills, experience, networks and <br> find an incredible job in the
					global digital world,</p>
				<div class="title__links">
					<a href="#form__apply" class="title__link now scroll">Apply now</a>
					<a href="#start" class="title__link more">Learn more</a>
				</div>
			</div>
		</div>
		<div class="title__arrow">
			<a href="#start" class="title__arrow-link">
				<svg width="173" height="53" viewBox="0 0 173 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.808 2.02671C6.24699 0.729011 9.55454 0 13.0033 0C16.452 0 19.7596 0.729011 22.1986 2.02671L86.5785 36.2914L150.958 2.02671C153.411 0.765788 156.697 0.0680706 160.107 0.0838421C163.517 0.0996137 166.779 0.827611 169.191 2.11104C171.602 3.39446 172.97 5.13062 173 6.94559C173.029 8.76056 171.718 10.5091 169.349 11.8146L95.7738 50.9733C93.3348 52.271 90.0273 53 86.5785 53C83.1298 53 79.8222 52.271 77.3832 50.9733L3.808 11.8146C1.36974 10.5165 0 8.75619 0 6.92068C0 5.08517 1.36974 3.32481 3.808 2.02671V2.02671Z" fill="#FF0D71"/>
				</svg>
			</a>
		</div>
	</section>

	<section class="start" id="start">
		<div class="container">
			<h2 class="start__title section-title text-decor big">Get new skills and boost your career <br> with Nobel
				Internship Program!
			</h2>
			<p class="start__desc">
				Thinking of a career in an international company, but lacking expertise?
				<br>What if we tell you there is an opportunity for you to gain work experience, try yourself in
				different spheres, and on top of that, improve your English?
				<br>Sounds interesting? Then the Nobel Internship is a perfect match for you!
			</p>
		</div>
	</section>

	<section class="how" style="margin-top:1.5rem">
		<div class="container">
			<img style="width: 100%; max-width:100%; display:block;" src="<?php echo get_template_directory_uri(); ?>/assets/images/Internship-Roadmap-2.jpg" alt="Nobel roadmap" title="Your learned to leader pathway">
		</div>
	</section>

	<section class="counter-section">
	  <div class="container">
			<h2 class="counter-section__title section-title text-decor big">Our numbers speak for themselves</h2>
		 <div class="counter-section__row">
			<div class="counter-section__item">
			   <div class="counter-section__image">
				  <svg width="80" height="80" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					 <circle cx="16" cy="16" r="16" fill="#2958F1"/>
					 <path d="M15.9999 11.4187C14.3023 11.4187 12.6053 11.2232 10.958 10.8371C10.7911 10.798 10.6874 10.6316 10.7265 10.4641C10.7656 10.2977 10.9282 10.1941 11.1002 10.2325C14.6958 11.0754 18.5174 10.9693 22.0727 9.92343C22.2403 9.87626 22.4104 9.96874 22.4582 10.1332C22.5066 10.2983 22.4129 10.4703 22.2484 10.5187C20.2181 11.1158 18.1158 11.4187 15.9999 11.4187Z" fill="white"/>
					 <path d="M22.16 22.0945C22.1309 22.0945 22.1017 22.0901 22.0719 22.0814C18.1249 20.9201 13.8745 20.9201 9.92749 22.0814C9.76052 22.128 9.58984 22.0361 9.54204 21.8716C9.49363 21.7065 9.58735 21.5346 9.75184 21.4862C13.8142 20.2907 18.1858 20.2907 22.2482 21.4862C22.4127 21.5346 22.5064 21.7065 22.458 21.8716C22.4182 22.0076 22.2941 22.0945 22.16 22.0945Z" fill="white"/>
					 <path d="M15.6209 24.7493C15.56 24.7493 15.4998 24.7319 15.4458 24.6953C12.5491 22.7184 10.8198 19.4679 10.8198 16.0001C10.8198 13.1902 11.9253 10.5454 13.9338 8.55303C14.0561 8.43075 14.2529 8.43324 14.3727 8.55427C14.4937 8.67592 14.4924 8.87268 14.3714 8.9931C12.4814 10.8682 11.4405 13.3565 11.4405 16.0001C11.4405 19.2624 13.0686 22.3218 15.7965 24.1826C15.938 24.2788 15.974 24.4725 15.8778 24.614C15.817 24.7021 15.7195 24.7493 15.6209 24.7493Z" fill="white"/>
					 <path d="M16.4059 24.7493C16.3072 24.7493 16.2098 24.7021 16.1496 24.614C16.0534 24.4718 16.0894 24.2788 16.2309 24.1826C18.9588 22.3218 20.5869 19.2624 20.5869 16C20.5869 12.7377 18.9588 9.67831 16.2309 7.81748C16.0894 7.72127 16.0534 7.52762 16.1496 7.3861C16.2464 7.24458 16.4401 7.20982 16.581 7.30479C19.4777 9.28169 21.207 12.5322 21.207 16C21.207 19.4678 19.4777 22.7184 16.581 24.6953C16.5276 24.7313 16.4667 24.7493 16.4059 24.7493Z" fill="white"/>
					 <path d="M16.0003 24.6568C15.829 24.6568 15.6899 24.5177 15.6899 24.3464V7.65361C15.6899 7.4823 15.829 7.34326 16.0003 7.34326C16.1716 7.34326 16.3106 7.4823 16.3106 7.65361V24.3464C16.3106 24.5184 16.1716 24.6568 16.0003 24.6568Z" fill="white"/>
					 <path d="M24.6569 16.3104H8.58476C8.41345 16.3104 8.27441 16.1714 8.27441 16C8.27441 15.8287 8.41345 15.6897 8.58476 15.6897H24.6575C24.8288 15.6897 24.9679 15.8287 24.9679 16C24.9679 16.1714 24.8288 16.3104 24.6569 16.3104Z" fill="white"/>
					 <path d="M16 25C11.0376 25 7 20.9624 7 16C7 13.8146 7.79324 11.7054 9.23448 10.0631C9.34745 9.934 9.54297 9.92159 9.67269 10.0346C9.80117 10.1475 9.81359 10.3437 9.70124 10.4728C8.35993 12.0015 7.62069 13.9648 7.62069 16C7.62069 20.6204 11.3796 24.3793 16 24.3793C20.6204 24.3793 24.3793 20.6204 24.3793 16C24.3793 11.3796 20.6204 7.62069 16 7.62069C14.0895 7.62069 12.2908 8.24634 10.7992 9.43C10.6652 9.53676 10.4703 9.51503 10.3635 9.37972C10.2568 9.24566 10.2791 9.05076 10.4138 8.944C12.0158 7.67221 13.9474 7 16 7C20.9624 7 25 11.0376 25 16C25 20.9624 20.9624 25 16 25Z" fill="white"/>
					 </svg>
			   </div>
			   <div class="counter-section__box">
						<div data-digits-counter="1500" class="counter-section__counter">98 +</div>
				  <div class="counter-section__countries">Countries</div>
			   </div>
			</div>
			<div class="counter-section__item">
			   <div class="counter-section__image">
				  <svg width="80" height="80" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					 <circle cx="16" cy="16" r="16" fill="#FCD404"/>
					 <path d="M20.3538 16.1012C20.3013 16.0491 20.2391 16.0079 20.1708 15.9798C20.1024 15.9518 20.0291 15.9375 19.9552 15.9377C19.8813 15.938 19.8082 15.9528 19.74 15.9814C19.6718 16.0099 19.6099 16.0516 19.5578 16.104C19.5058 16.1564 19.4645 16.2186 19.4365 16.287C19.4084 16.3554 19.3941 16.4286 19.3944 16.5025C19.3947 16.5765 19.4095 16.6496 19.438 16.7178C19.4665 16.786 19.5082 16.8479 19.5607 16.8999C20.0366 17.3709 20.4144 17.9315 20.6722 18.5495C20.93 19.1674 21.0627 19.8304 21.0625 20.4999C21.0625 21.1862 19.0882 22.1874 16 22.1874C12.9119 22.1874 10.9375 21.1862 10.9375 20.4999C10.9366 19.8348 11.0668 19.176 11.3207 18.5612C11.5745 17.9464 11.947 17.3876 12.4169 16.9168C12.5217 16.8114 12.5805 16.6689 12.5805 16.5202C12.5805 16.3716 12.5217 16.2291 12.4169 16.1237C12.3115 16.0189 12.169 15.9601 12.0203 15.9601C11.8717 15.9601 11.7292 16.0189 11.6238 16.1237C11.0473 16.697 10.5903 17.379 10.2794 18.1302C9.96849 18.8814 9.8098 19.6869 9.81253 20.4999C9.81253 22.3281 13.0019 23.3124 16 23.3124C18.9982 23.3124 22.1875 22.3281 22.1875 20.4999C22.1897 19.6816 22.0286 18.8711 21.7138 18.1158C21.3989 17.3605 20.9366 16.6756 20.3538 16.1012Z" fill="white"/>
					 <path d="M16 16.5625C16.7788 16.5625 17.54 16.3316 18.1876 15.8989C18.8351 15.4663 19.3398 14.8513 19.6378 14.1318C19.9358 13.4123 20.0138 12.6206 19.8618 11.8568C19.7099 11.093 19.3349 10.3914 18.7842 9.84077C18.2336 9.2901 17.532 8.91509 16.7682 8.76316C16.0044 8.61123 15.2127 8.68921 14.4932 8.98723C13.7737 9.28525 13.1587 9.78993 12.7261 10.4374C12.2934 11.085 12.0625 11.8462 12.0625 12.625C12.0625 13.6693 12.4773 14.6708 13.2158 15.4092C13.9542 16.1477 14.9557 16.5625 16 16.5625ZM16 9.8125C16.5563 9.8125 17.1 9.97745 17.5625 10.2865C18.0251 10.5955 18.3855 11.0348 18.5984 11.5487C18.8113 12.0626 18.867 12.6281 18.7585 13.1737C18.6499 13.7193 18.3821 14.2204 17.9887 14.6137C17.5954 15.0071 17.0943 15.2749 16.5487 15.3835C16.0031 15.492 15.4376 15.4363 14.9237 15.2234C14.4098 15.0105 13.9705 14.6501 13.6615 14.1875C13.3525 13.725 13.1875 13.1813 13.1875 12.625C13.1875 11.8791 13.4838 11.1637 14.0113 10.6363C14.5387 10.1088 15.2541 9.8125 16 9.8125Z" fill="white"/>
				  </svg>
			   </div>
			   <div class="counter-section__box">
						<div data-digits-counter="1700" class="counter-section__counter">9000 +</div>
				  <div class="counter-section__countries">Applicants</div>
			   </div>
			</div>
		 </div>
	  </div>
   </section>

	<section class="popup" style="box-shadow:initial;border:none;padding-top:0;padding-bottom:0;">
		<h2 class="popup__title" style="white-space: normal !important;padding-right:0;">What is Nobel Internship Fundamentals?</h2>

		<div class="popup__block">
			<h3 class="popup__subtitle">STEP 1: Intro Course <span>- 5 meetings</span></h3>
			<p class="popup__desc">Consists of the course of your primary interest</p>
			<ul class="popup__list">
				<li class="popup__item">Basics of Internet Troubleshooting and Communication</li>
				<li class="popup__item">Pitch & Presentation</li>
				<li class="popup__item">Introduction to Web Design</li>
			</ul>
		</div>

		<div class="popup__block">
			<h3 class="popup__subtitle">STEP 2: Leadership Course <span>- 4 meetings</span></h3>
		</div>

		<div class="popup__block">
			<h3 class="popup__subtitle">STEP 3: Leadership Practice <span>- 12 meetings</span></h3>
			<p class="popup__desc">Here you get to take the other intro courses from your peers and practice your leadership skills!</p>
		</div>

		<div class="popup__block pink">
			<h3 class="popup__subtitle">STEP 4: Welcome a new community into Nobel <span>- 6 meetings</span></h3>
		</div>

		
		<!-- <a class="popup-modal-dismiss" href="#">
			<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M33.3334 6.66666L6.66675 33.3333M33.3334 33.3333L6.66675 6.66666L33.3334 33.3333Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round"/>
			</svg>			
		</a> -->
	</section>

	<section class="date" id="form__apply">
		<div class="container">
			<h2 class="date__title section-title text-decor small" style="text-transform:initial;">Program Schedule</h2>
			<p class="date__desc">Choose type of program and select the start date to find out the schedule</p>
			<div class="date__form">
				<div class="date__checkbox">
					<label class="checkbox__container">
						<input type="radio" name="radio" value="weekday">
						<span class="checkmark"></span>
						<span>Weekday</span>
					</label>
					<label class="checkbox__container">
						<input type="radio" name="radio" value="weekend" checked>
						<span class="checkmark"></span>
						<span>Weekend</span>
					</label>
				</div>
				<div class="date__selects">
					<div class="date__select-wrap weekend">
						<select name="weekend" class="date__select">
							<option value="june-17">June 17 (deadline - June 15)</option>
							<option value="july-15">July 15 (deadline - July 11)</option>
							<option value="august-19">August 19 (deadline - August 15)</option>
							<option value="september-16">September 16 (deadline - September 12)</option>
							<option value="future">Future (select if none of the options above are acceptable)</option>
						</select>
					</div>
					<div class="date__select-wrap weekday">
						<select name="weekday" class="date__select">
							<option value="may-26">May 26 (deadline - May 19)</option>
							<option value="june-23">June 23 (deadline - June 16)</option>
							<option value="july-21">July 21 (deadline - July 17)</option>
							<option value="august-11">August 11 (deadline - August 7)</option>
							<option value="september-1">September 1 (deadline - August 28)</option>
							<option value="future">Future (select if none of the options above are acceptable)</option>
						</select>
					</div>
				</div>
			</div>
			<div class="date__content">
				<h3 class="date__program">
					<div class="popup-modal">
						<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M17 2.125C8.78555 2.125 2.125 8.78555 2.125 17C2.125 25.2145 8.78555 31.875 17 31.875C25.2145 31.875 31.875 25.2145 31.875 17C31.875 8.78555 25.2145 2.125 17 2.125ZM17 29.3516C10.1801 29.3516 4.64844 23.8199 4.64844 17C4.64844 10.1801 10.1801 4.64844 17 4.64844C23.8199 4.64844 29.3516 10.1801 29.3516 17C29.3516 23.8199 23.8199 29.3516 17 29.3516Z"
								fill="black" />
							<path
								d="M15.4062 11.1562C15.4063 11.5789 15.5742 11.9843 15.873 12.2832C16.1719 12.5821 16.5773 12.75 17 12.75C17.4227 12.75 17.8281 12.5821 18.127 12.2832C18.4258 11.9843 18.5938 11.5789 18.5938 11.1562C18.5938 10.7336 18.4258 10.3282 18.127 10.0293C17.8281 9.73041 17.4227 9.5625 17 9.5625C16.5773 9.5625 16.1719 9.73041 15.873 10.0293C15.5742 10.3282 15.4063 10.7336 15.4062 11.1562V11.1562ZM17.7969 14.875H16.2031C16.057 14.875 15.9375 14.9945 15.9375 15.1406V24.1719C15.9375 24.318 16.057 24.4375 16.2031 24.4375H17.7969C17.943 24.4375 18.0625 24.318 18.0625 24.1719V15.1406C18.0625 14.9945 17.943 14.875 17.7969 14.875Z"
								fill="black" />
						</svg>
					</div>
					<span>Weekend Program</span>
				</h3>
				<p class="date__text" id="deadline"><b>Application deadline:</b> <span id="line-0">---</span></p>
				<p class="date__text" id="date"><b>First meeting:</b> <span id="line-1">---</span></p>
				<p class="date__text"><b>Frequency of meetings:</b> <span id="line-2">---</span></p>
				<p class="date__text"><b>Schedule:</b> <span id="line-3">---</span></p>
				<p class="date__text"><b>Duration of Fundamentals (first stage of the Internship Program):</b> <span id="line-4">---</span>
				</p>
			</div>

			<a href="#form" class="date__btn popup-open">Apply now</a>
		</div>
	</section>
	<section class="ques">
		<div class="container">
			<h2 class="ques__title section-title text-decor big">Frequently Asked Questions</h2>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">Is Nobel Internship free? <svg width="44" height="44"
						viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<p>YES, IT IS! Our goal is to provide equal education and growth opportunities to everyone, therefore, the Nobel Internship Program is completely free of charge.</p>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">Who is our perfect intern? <svg width="44" height="44"
						viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<ul class="ques__list">
						<li class="ques__item">
							A 16+ year old interested in developing their skills for the 21st century global job market
						</li>
						<li class="ques__item">
							Someone who wants to improve their conversational English
						</li>
						<li class="ques__item">
							Someone who can commit 4h+ of scheduled activities per week
						</li>
						<li class="ques__item">
							Someone who wants to meet people from different parts of the world
						</li>
					</ul>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">5 reasons to join Internship? <svg width="44" height="44"
						viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<p>In Nobel you will:</p>
					<ol class="ques__list">
						<li class="ques__item">
							learn and improve the essential hard and soft skills you need for your future;
						</li>
						<li class="ques__item">
							gain the experience of working in an international company;
						</li>
						<li class="ques__item">
							receive a certificate upon completion of the Internship;
						</li>
						<li class="ques__item">
							find the most awesome, smart, motivated, and interesting people from all over the world;
						</li>
						<li class="ques__item">
							boost your English level.
						</li>
					</ol>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">What do I need to have to participate in the Internship?<svg width="44" height="44"
						viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<ul class="ques__list">
						<li class="ques__item">
							PC / Laptop (NO tablets / phones) - Windows / Apple / Chromebook
						</li>
						<li class="ques__item">
							Headset with boom mic / Earphones with mic / Gaming headset 
						</li>
						<li class="ques__item">
							Working webcam
						</li>
						<li class="ques__item">
							Noise-free environment
						</li>
						<li class="ques__item">
							Stable internet connection
						</li>
					</ul>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">How do I join the Program? <svg width="44" height="44"
						viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<ul class="ques__list">
						<li class="ques__item">
							Fill out the <a href="#form__apply" class="scroll" target="_blank">form</a>;
						</li>
						<li class="ques__item">
							Check your inbox;
						</li>
						<li class="ques__item">
							Attend Group Interview & Orientation meeting;
						</li>
						<li class="ques__item">
							Welcome onboard!
						</li>
					</ul>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">Where can I find more details about the courses?<svg width="44"
						height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<p>You can find more details about the courses in this <a href="https://www.nobelnavigators.com/wp-content/uploads/2023/06/Nobel-Fundamentals-PDF-guide-1.pdf" target="_blank">pdf file</a></p>
				</div>
			</div>
			<div class="ques__box">
				<a href="#" class="ques__subtitle">What if I didn’t find an answer to my questions?<svg width="44"
						height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="minus" d="M36.6666 22H7.33325" stroke="#000000" stroke-width="3" stroke-linecap="round" />
						<path d="M22 36.6666V22M22 22V7.33331M22 22H36.6667M22 22H7.33334" stroke="#000000" stroke-width="3" stroke-linecap="round"/>
					</svg>
				</a>
				<div class="ques__desc">
					<p>Contact us at <a href="mailto:internships@nobelcoaching.com"
							target="_blank">internships@nobelcoaching.com</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="feed">
		<div class="container">
			<h2 class="feed__title section-title text-decor big">Meet Our Interns
			</h2>
			<div class="feed__slider">
				<div class="feed__slide">
					<div class="feed__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intership-slider-1.1.jpg" width="260" alt="#">
						<h3 class="feed__name">Anna, 16 y.o, Ukraine</h3>
						<span class="feed__spec">Nobel Intern</span>
					</div>
					<div class="feed__block">
						<p class="feed__desc">Firstly I need to say that got familiar with Nobel due to the Film club📽. I was searching for some new opportunities and figured Film club in one group.
							<span>
								Then I decided to try to join the Nobel internship, it was something new for me and I didn't expect anything. I just realized that there were courses that I'd like to participate in so I applied and was waiting for the answer🙂. 
								<br>
								However, it came in a really interesting way. Now I'm in love with Nobel, all the people, and activities here🤩. 
								Currently, it's a huge part of my life. I got a new experience that helped me to overcome my fears of pitching to the public and trying something new☺️. In addition, I have lots of international friends here and I'm happy with it🤗. To wrap it up I can add that the Nobel community is more than just an internship, it's a family that always supports you and helps to improve yourself🥰.
							</span>
							<button id="readmore" class="feed__readmore"><span class="read">Read more...</span><span class="hide">Show less...</span></button>
						</p>
					</div>
				</div>
				<div class="feed__slide">
					<div class="feed__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intership-slider-2.1.jpg" width="260" alt="#">
						<h3 class="feed__name">Begum, 18 y.o, Turkey</h3>
						<span class="feed__spec">Nobel Intern</span>
					</div>
					<div class="feed__block">
						<p class="feed__desc">At first, I had only one reason to join Nobel which is completely different than the reason why I still continue after a year of my internship now.
							<span>
							It used to be to find people to chat with in English (i was on the edge of forgetting the language) Even if I find a friend, you know, it is a little awkward to speak your second language with someone with who you share the same mother tongue. It is not as effective as speaking with people that English is your only choice to communicate. But then once I started my journey, I was shocked by the amount of skill I gained even how fast and fun my facilitators did that. I'm way better at doing presentations, speaking in front of people, leading a meeting, giving proper feedback, and working in a team. They don't teach us these soft skills at school. They are the 21st-century competencies! Also since my teammates were from different countries, I got to know new cultures as well as new perspectives... And yes I did improve my English a lot :)
							</span>
							<button id="readmore" class="feed__readmore"><span class="read">Read more...</span><span class="hide">Show less...</span></button>
						</p>
					
						
					</div>
				</div>
				<div class="feed__slide">
					<div class="feed__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intership-slider-3.jpg" width="260" alt="#">
						<h3 class="feed__name">Amelia, 17 y.o, USA</h3>
						<span class="feed__spec">Nobel Intern</span>
					</div>
					<div class="feed__block">
						<p class="feed__desc">I joined Nobel because I am super interested in technology and coding, in which Nobel has multiple courses. 
							<span>
							I also knew I needed to improve my soft skills in presenting and communicating in teams. since joining, I have met so many cool people and learned a lot about other countries and cultures across the globe. I have grown much more comfortable with speaking with my team members and in front of a large group while also gaining knowledge of technology
							</span>
							<button id="readmore" class="feed__readmore"><span class="read">Read more...</span><span class="hide">Show less...</span></button>
						
						</p>
					</div>
				</div>
				<div class="feed__slide">
					<div class="feed__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intership-slider-6.jpg" width="260" alt="#">
						<h3 class="feed__name">Anastasiia, 18 y.o, Ukraine</h3>
						<span class="feed__spec">Nobel Intern</span>
					</div>
					<div class="feed__block">
						<p class="feed__desc">Nobel is a great opportunity to meet with people from different countries and even learn about new cultures.
							<br>
							<span>
							Nobel gave me a great team and environment where I can become a better version of myself. 
							<br>
							But my favorite things are the great community and the people who support you. Also, a lot of opportunities came along
							after finishing my internship at Nobel.
							</span>
							<button id="readmore" class="feed__readmore"><span class="read">Read more...</span><span class="hide">Show less...</span></button>
						</p>
					</div>
				</div>
				<div class="feed__slide">
					<div class="feed__block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intership-slider-5.jpg" width="260" alt="#">
						<h3 class="feed__name">İkra, 16 y.o, Turkey</h3>
						<span class="feed__spec">Nobel Intern</span>
					</div>
					<div class="feed__block">
						<p class="feed__desc">My most significant benefit from Nobel Internship was improving my English skills. I got the opportunity to talk about my ideas, 
							<span>
							so I can speak more confidently now. The other benefit was meeting people around the world and getting to know their culture more. I have learned about facilitators' experiences and I had the chance to facilitate some people on my own.
							</span>
							<button id="readmore" class="feed__readmore"><span class="read">Read more...</span><span class="hide">Show less...</span></button>
						
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<style>
	#_form_71_ {
		font-size: 14px;
		line-height: 1.6;
		margin: 0;
	}

	#_form_71_ * {
		outline: 0;
	}

	._form_hide {
		display: none;
		visibility: hidden;
	}

	._form_show {
		display: block;
		visibility: visible;
	}

	#_form_71_._form-top {
		top: 0;
	}

	#_form_71_._form-bottom {
		bottom: 0;
	}

	#_form_71_._form-left {
		left: 0;
	}

	#_form_71_._form-right {
		right: 0;
	}

	#_form_71_ input[type="text"],
	#_form_71_ input[type="number"],
	#_form_71_ input[type="date"],
	#_form_71_ textarea {
		padding: 6px;
		height: auto;
		border: #979797 1px solid;
		border-radius: 4px;
		color: #000 !important;
		font-size: 14px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	#_form_71_ textarea {
		resize: none;
	}

	#_form_71_ ._submit {
		-webkit-appearance: none;
		cursor: pointer;
		font-size: 14px;
		text-align: center;
		background: #2a59f1 !important;
		border: 0 !important;
		-moz-border-radius: 5px !important;
		-webkit-border-radius: 5px !important;
		border-radius: 5px !important;
		color: #fff !important;
		padding: 10px !important;
	}

	#_form_71_ ._close-icon {
		cursor: pointer;
		background-image: url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png');
		background-repeat: no-repeat;
		background-size: 14.2px 14.2px;
		position: absolute;
		display: block;
		top: 11px;
		right: 9px;
		overflow: hidden;
		width: 16.2px;
		height: 16.2px;
	}

	#_form_71_ ._close-icon:before {
		position: relative;
	}

	#_form_71_ ._form-body {
		margin-bottom: 30px;
	}

	#_form_71_ ._form-image-left {
		width: 150px;
		float: left;
	}

	#_form_71_ ._form-content-right {
		margin-left: 164px;
	}

	#_form_71_ ._form-branding {
		color: #fff;
		font-size: 10px;
		clear: both;
		text-align: left;
		margin-top: 30px;
		font-weight: 100;
	}

	#_form_71_ ._form-branding ._logo {
		display: block;
		width: 130px;
		height: 14px;
		margin-top: 6px;
		background-image: url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png');
		background-size: 130px auto;
		background-repeat: no-repeat;
	}

	#_form_71_ .form-sr-only {
		position: absolute;
		width: 1px;
		height: 1px;
		padding: 0;
		margin: -1px;
		overflow: hidden;
		clip: rect(0, 0, 0, 0);
		border: 0;
	}

	#_form_71_ ._form-label,
	#_form_71_ ._form_element ._form-label {
		font-weight: bold;
		margin-bottom: 5px;
		display: block;
	}

	#_form_71_._dark ._form-branding {
		color: #333;
	}

	#_form_71_._dark ._form-branding ._logo {
		background-image: url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png');
	}

	#_form_71_ ._form_element {
		position: relative;
		margin-bottom: 10px;
		font-size: 0;
		max-width: 100%;
	}

	#_form_71_ ._form_element * {
		font-size: 16px;
	}

	#_form_71_ ._form_element._clear {
		clear: both;
		width: 100%;
		float: none;
	}

	#_form_71_ ._form_element._clear:after {
		clear: left;
	}

	#_form_71_ ._form_element input[type="text"],
	#_form_71_ ._form_element input[type="number"],
	#_form_71_ ._form_element input[type="date"],
	#_form_71_ ._form_element select,
	#_form_71_ ._form_element textarea:not(.g-recaptcha-response) {
		display: block;
		width: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		font-family: inherit;
	}

	#_form_71_ ._field-wrapper {
		position: relative;
	}

	#_form_71_ ._inline-style {
		float: left;
	}

	#_form_71_ ._inline-style input[type="text"],
	#_form_71_ ._inline-style input[type="number"] {
		width: 150px;
	}

	#_form_71_ ._inline-style:not(._clear)+._inline-style:not(._clear) {
		margin-left: 20px;
	}

	#_form_71_ ._form_element img._form-image {
		max-width: 100%;
	}

	#_form_71_ ._form_element ._form-fieldset {
		border: 0;
		padding: 0.01em 0 0 0;
		margin: 0;
		min-width: 0;
	}

	#_form_71_ ._clear-element {
		clear: left;
	}

	#_form_71_ ._full_width {
		width: 100%;
	}

	#_form_71_ ._form_full_field {
		display: block;
		width: 100%;
		margin-bottom: 10px;
	}

	#_form_71_ input[type="text"]._has_error,
	#_form_71_ textarea._has_error {
		border: #f37c7b 1px solid;
	}

	#_form_71_ input[type="number"]._has_error,
	#_form_71_ textarea._has_error {
		border: #f37c7b 1px solid;
	}

	#_form_71_ input[type="checkbox"]._has_error {
		outline: #f37c7b 1px solid;
	}

	#_form_71_ ._error {
		display: block;
		position: absolute;
		font-size: 14px;
		z-index: 10000001;
	}

	#_form_71_ ._error._above {
		padding-bottom: 4px;
		bottom: 39px;
		right: 0;
	}

	#_form_71_ ._error._below {
		padding-top: 4px;
		top: 100%;
		right: 0;
	}

	#_form_71_ ._error._above ._error-arrow {
		bottom: 0;
		right: 15px;
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid #f37c7b;
	}

	#_form_71_ ._error._below ._error-arrow {
		top: 0;
		right: 15px;
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-bottom: 5px solid #f37c7b;
	}

	#_form_71_ ._error-inner {
		padding: 8px 12px;
		background-color: #f37c7b;
		font-size: 14px;
		color: #fff;
		text-align: center;
		text-decoration: none;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}

	#_form_71_ ._error-inner._form_error {
		margin-bottom: 5px;
		text-align: left;
	}

	#_form_71_ ._button-wrapper ._error-inner._form_error {
		position: static;
	}

	#_form_71_ ._error-inner._no_arrow {
		margin-bottom: 10px;
	}

	#_form_71_ ._error-arrow {
		position: absolute;
		width: 0;
		height: 0;
	}

	#_form_71_ ._error-html {
		margin-bottom: 10px;
	}

	.pika-single {
		z-index: 10000001 !important;
	}

	#_form_71_ input[type="text"].datetime_date {
		width: 69%;
		display: inline;
	}

	#_form_71_ input[type="number"].datetime_date {
		width: 69%;
		display: inline;
	}

	#_form_71_ select.datetime_time {
		width: 29%;
		display: inline;
		height: 32px;
	}

	#_form_71_ input[type="date"].datetime_date {
		width: 69%;
		display: inline-flex;
	}

	#_form_71_ input[type="time"].datetime_time {
		width: 29%;
		display: inline-flex;
	}

	@media all and (min-width:320px) and (max-width:667px) {
		::-webkit-scrollbar {
			display: none;
		}

		#_form_71_ {
			margin: 0;
			width: 100%;
			min-width: 100%;
			max-width: 100%;
			box-sizing: border-box;
		}

		#_form_71_ * {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			font-size: 1em;
		}

		#_form_71_ ._form-content {
			margin: 0;
			width: 100%;
		}

		#_form_71_ ._form-inner {
			display: block;
			min-width: 100%;
		}

		#_form_71_ ._form-title,
		#_form_71_ ._inline-style {
			margin-top: 0;
			margin-right: 0;
			margin-left: 0;
		}

		#_form_71_ ._form-title {
			font-size: 1.2em;
		}

		#_form_71_ ._form_element {
			margin: 0 0 20px;
			padding: 0;
			width: 100%;
		}

		#_form_71_ ._form-element,
		#_form_71_ ._inline-style,
		#_form_71_ input[type="text"],
		#_form_71_ label,
		#_form_71_ p,
		#_form_71_ textarea:not(.g-recaptcha-response) {
			float: none;
			display: block;
			width: 100%;
		}

		#_form_71_ ._form-element,
		#_form_71_ ._inline-style,
		#_form_71_ input[type="number"],
		#_form_71_ label,
		#_form_71_ p,
		#_form_71_ textarea:not(.g-recaptcha-response) {
			float: none;
			display: block;
			width: 100%;
		}

		#_form_71_ ._row._checkbox-radio label {
			display: inline;
		}

		#_form_71_ ._row,
		#_form_71_ p,
		#_form_71_ label {
			margin-bottom: 0.7em;
			width: 100%;
		}

		#_form_71_ ._row input[type="checkbox"],
		#_form_71_ ._row input[type="radio"] {
			margin: 0 !important;
			vertical-align: middle !important;
		}

		#_form_71_ ._row input[type="checkbox"]+span label {
			display: inline;
		}

		#_form_71_ ._row span label {
			margin: 0 !important;
			width: initial !important;
			vertical-align: middle !important;
		}

		#_form_71_ ._form-image {
			max-width: 100%;
			height: auto !important;
		}

		#_form_71_ input[type="text"],
		#_form_71_ input[type="number"] {
			padding-left: 10px;
			padding-right: 10px;
			font-size: 16px;
			line-height: 1.3em;
			-webkit-appearance: none;
		}

		#_form_71_ input[type="radio"],
		#_form_71_ input[type="checkbox"] {
			display: inline-block;
			width: 1.3em;
			height: 1.3em;
			font-size: 1em;
			margin: 0 0.3em 0 0;
			vertical-align: baseline;
		}

		#_form_71_ button[type="submit"] {
			padding: 20px;
			font-size: 1.5em;
		}

		#_form_71_ ._inline-style {
			margin: 20px 0 0 !important;
		}
	}

	#_form_71_ {
		position: relative;
		text-align: left;
		margin: 25px auto 0;
		padding: 20px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		*zoom: 1;
		background: #fff !important;
		border: 0px solid #b0b0b0 !important;
		max-width: 1400px;
		-moz-border-radius: 0px !important;
		-webkit-border-radius: 0px !important;
		border-radius: 0px !important;
		color: #505860 !important;
	}

	#_form_71_ ._form-title {
		font-size: 22px;
		line-height: 22px;
		font-weight: 600;
		margin-bottom: 0;
	}

	#_form_71_:before,
	#_form_71_:after {
		content: " ";
		display: table;
	}

	#_form_71_:after {
		clear: both;
	}

	#_form_71_._inline-style {
		width: auto;
		display: inline-block;
	}

	#_form_71_._inline-style input[type="text"],
	#_form_71_._inline-style input[type="number"],
	#_form_71_._inline-style input[type="date"] {
		padding: 10px 12px;
	}

	#_form_71_._inline-style button._inline-style {
		position: relative;
		top: 27px;
	}

	#_form_71_._inline-style p {
		margin: 0;
	}

	#_form_71_._inline-style ._button-wrapper {
		position: relative;
		margin: 27px 12.5px 0 20px;
	}

	#_form_71_ ._form-thank-you {
		position: relative;
		left: 0;
		right: 0;
		text-align: center;
		font-size: 18px;
	}

	@media all and (min-width:320px) and (max-width:667px) {
		#_form_71_._inline-form._inline-style ._inline-style._button-wrapper {
			margin-top: 20px !important;
			margin-left: 0 !important;
		}
	}

	#_form_71_ ._form-title {
		font-size: 64px;
		line-height: 1;
		color: #000;
	}
	#_form_71_ {
		padding: 0;
		margin-top: 0;
	}
	.sign{
		margin-top: 64px;
		padding: 16px 56px 32px 56px;
		max-width: 1126px;
		min-width: 1126px;
	}
	._x49140690{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.sign__image img{
		max-width: 80px;
		display: block;
		border-radius: 0 !important;
	}
	.sign__image{
		position: relative;
		padding-right: 20px;
		margin-right: 20px;
	}
	.sign__image::after{
		position: absolute;
		content: "";
		right:0;
		width: 1px;
		height: 100%;
		background-color: #000;
		top:0;
		bottom:0;
	}
	._html-code{
		text-align: center;
		max-width: 760px;
		color: #8d8d8d;
		line-height: 1.5;
		margin-top: 16px;
		font-size: 16px !important;
		margin: 0 auto;
	}
	.descr{
		margin-top: 16px;
	}
	.sign_343-unique{
		display: flex;
	}
	.sign_343-unique > div{
		width: 49%;
		margin-right: 2%;
	}
	.sign_343-unique > div:last-child{
		margin-right: 0;
	}
	* input{
		border: 1px solid #000 !important;
		border-radius: 20px !important;
		background-color: #fff !important;
		font-size: 20px !important;
		line-height: 1.5 !important;
		padding: 10px 20px !important;
	}
	* select{
		border: 1px solid #000 !important;
		border-radius: 20px !important;
		background-color: #fff !important;
		font-size: 20px !important;
		line-height: 1.5 !important;
		padding: 10px 20px !important;

		-webkit-appearance: none;
		-moz-appearance: none;
		text-indent: 1px;
		text-overflow: '';
		position: relative;
	}
	._field-wrapper.select454{
		position: relative;
	}
	._field-wrapper.select454::after{
		content:"";
		position: absolute;
		right:20px;
		top:0;
		bottom:0;
		margin: auto 0;
		background: url(<? echo get_template_directory_uri(); ?>/assets/images/icons/drop-down-icon.svg) center / cover no-repeat;
		width: 24px;
		height: 12px;
		pointer-events: none;
	}
	* select::-ms-expand {
		display: none;
	}
	.input-name{
		font-size: 20px !important;
		line-height: 1.5 !important;
		color: #000 !important;
		font-weight: 400 !important;
		margin-top: 16px !important;
	}
	._form_element{
		margin-top:16px;
		margin-bottom: 0 !important;
	}
	@media(max-width:640px){
		._form_element{
			margin-top: 12px !important;
		}
	}
	* option{
		height: 250px !important;
	}
	#_form_71_ ._submit {
		background-color: #000 !important;
		border-radius: 30px !important;
		font-size: 24px;
		padding: 12px 24px !important;
	}
	@media(max-width:1480px){
		.sign {
			padding: 24px 56px 32px 56px;
			max-width: 980px;
			min-width:980px;
		}
		#_form_71_ ._form-title {
			font-size: 56px;
		}
	}
	@media(max-width:1024px){
		.sign_343-unique{
			display: block;
		}
		#_form_71_ ._form-title {
			font-size: 40px;
		}
		.sign__image img {
			max-width: 56px;
		}
		.sign{
			max-width:90%;
			min-width:90%;
			margin: 0 auto !important;
			padding: 16px 48px 32px 48px;
		}
	}
	@media(max-width:860px){
		.sign{
			padding: 16px 32px 32px 32px;
		}
		#_form_71_ ._submit{
			font-size: 20px;
		}
		.input-name{
			font-size: 18px !important;
		}
		* input {
			font-size: 18px !important;
			padding: 8px 16px !important;
		}
		* select {
			font-size: 18px !important;
			padding: 8px 16px !important;
		}
	}

	@media(max-width:768px){
		#_form_71_ ._submit {
			font-size: 16px;
		}
		.sign{
			padding: 16px 24px 24px 24px;
		}
		#_form_71_ ._form-title {
			font-size: 32px;
		}
		.sign__image img {
			max-width: 48px;
		}
	}
	@media(max-width:667px){
		#_form_71_ button[type="submit"] {
			font-size: 16px;
		}
	}
	@media(max-width:640px){
		.sign {
			margin: 0 20px;
		}
	}
	@media(max-width:480px){
		.descr{
			font-size: 14px !important;
		}
		#_form_71_ ._form-title {
			font-size: 28px;
		}
		.sign__image img {
			max-width: 40px;
		}
		.sign__image{
			padding-right: 16px;
			margin-right: 16px;
		}
	}
	@media(max-width:400px){
		.input-name{
			font-size: 16px !important;
		}
		* input {
			font-size: 16px !important;
			padding: 8px 16px !important;
		}
		* select {
			font-size: 16px !important;
			padding: 8px 16px !important;
		}
		.sign {
			padding: 16px;
		}
		.sign {
			margin: 0 15px;
		}
	}

	#_form_71_submit[disabled]{
		opacity: .5 !important;
		pointer-events: none !important;
	}

	#_form_70_submit, #_form_71_submit{
		white-space: inherit;
	}

	._row._checkbox-radio input{
		min-width: 16px !important; 
		min-height: 16px !important;
		margin-right: 8px !important;
	}
	._field216{
		margin-top: 16px;
	}

	@media(max-width:640px){
		#_form_71_ ._row input[type="checkbox"], #_form_71_ ._row input[type="radio"]{
		min-width: 18px !important; 
		min-height: 18px !important;
		max-width: 18px !important; 
		max-height: 18px !important;
		margin-right: 8px !important;
	}
	._field216{
		margin-top: 12px !important;
	}
	}

	@media(max-width: 667px){
		#_form_71_ ._row input[type="checkbox"], #_form_71_ ._row input[type="radio"] {
			margin-top: 5px !important;
			margin-right: 8px !important;
		}
	}

	@media(max-width:480px){
		#_form_71_ ._form_element * {
			font-size: 14px;
		}
		#_form_71_ ._row input[type="checkbox"], #_form_71_ ._row input[type="radio"]{
			min-width: 16px !important; 
			min-height: 16px !important;
			max-width: 16px !important; 
			max-height: 16px !important;
			margin-top: 4px !important;
		}
		.sign__title{
			font-size: 24px !important;
		}
	}

	._row._checkbox-radio{
		display: flex;
	}

	._row._checkbox-radio input{
		margin-top: 5px;
	}

	.elementor-kit-573 label {
		color: #000000 !important;
	}

	body{
		background: rgba(144, 202, 249, 0.1);
		backdrop-filter: blur(39px);
	}
	._row._checkbox-radio {
		align-items: flex-start;
	}

.counter-section {
	padding-top: 100px;
}

.counter-section__row {
   display: flex;
   justify-content: center;
   gap: 50px;
}
.counter-section__title {
   text-align: center;
   margin-bottom: 30px;
   font-size: 32px;
   font-weight: 700;
	line-height: 1.5;
}
.counter-section__item {
   display: flex;
   align-items: center;
	gap: 10px;

}
.counter-section__box {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.counter-section__counter {
   text-align: center;
   font-size: 30px;
   font-weight: 700;
   color: #FF0D71;
}
.counter-section__countries {
   font-size: 20px;
	color: #3d3d3d;

}
@media (max-width: 480px){

}
@media(max-width: 1024px) {
	.counter-section__title {
		font-size: 28px;
	}
}
@media(max-width: 768px) {
	.counter-section__title {
		font-size: 24px;
	}
}
@media(max-width: 580px) {
	.counter-section__item {
		flex-direction: column;
		gap: 5px;
	}
	 .counter-section__image svg{
		width: 65px;
		height: 65px;
	} 
	.counter-section__title {
		font-size: 18px;
	}
	.counter-section__counter {
		font-size: 24px;
	}
	.counter-section__countries {
		font-size: 18px;
	} 
}
@media(max-width: 380) {
	.counter-section__title {
		font-size: 14px;
	}
}
</style>

<style>
	._error-inner._no_arrow._below ~ ._error-inner._no_arrow._below{
		display: none !important;
	}
	._error-inner._no_arrow._below{
		position: absolute;
		top: -44px;
	}
	.--finish-step{
		display: none;
	}
	.--checkboxes{
		margin-top:48px !important;
	}
	._form-content.last-step .first-step{
		display: none;
	}

	._form-content.last-step .--finish-step{
		display: block;
	}

	.checkbox-title{
		font-size: 22px !important;
	}
	.checkbox-text{
		font-size: 18px !important;
	}
	@media(max-width:768px){
		.checkbox-title{
			font-size: 18px !important;
		}
		.checkbox-text{
			font-size: 16px !important;
		}
	}
	@media(max-width:580px){
		.checkbox-title{
			font-size: 16px !important;
			line-height: 1.5;
		}
		.checkbox-text{
			font-size: 14px !important;
			line-height: 1.5;
		}
	}
</style>

<div id="form" class="sign white-popup-block mfp-hide popup">
	<form method="POST" action="<?php echo get_site_url(); ?>/mail.php" id="_form_71_"
		class="_form _form_71 _inline-form  _dark" novalidate>
		<input type="hidden" name="u" value="71" />
		<input type="hidden" name="f" value="71" />
		<input type="hidden" name="s" />
		<input type="hidden" name="c" value="0" />
		<input type="hidden" name="m" value="0" />
		<input type="hidden" name="act" value="sub" />
		<input type="hidden" name="v" value="2" />
		<input type="hidden" name="or" value="0b89dfb8c17ae6a23343d3887d10ffd8" />
		<div class="_form-content">
			<div class="_form_element _x49140690 _full_width _clear first-step">
				<div class="sign__image">
					<img src="<? echo get_template_directory_uri(); ?>/assets/images/logo-gni-1.png" alt="#">
				</div>
				<div class="_form-title sign__title">
					TELL US MORE!
				</div>
			</div>
			<div class="_form_element _x07229312 _full_width _clear first-step">
				<div class="_html-code descr">
					Before we meet you on  <strong id="popup--date"></strong>,  we would love to get to know you better. Please note that by filling out the form below, you agree to your data being stored, processed, and reviewed.
				</div>
			</div>
			<div class="sign_343-unique first-step">
				<div class="_form_element _x93927283 _full_width ">
					<label for="firstname" class="_form-label input-name">
						First Name
					</label>
					<div class="_field-wrapper">
						<input type="text" id="firstname" name="firstname" placeholder="Type your first name"
							required />
					</div>
				</div>
				<div class="_form_element _x97541217 _full_width ">
					<label for="lastname" class="_form-label input-name">
						Last Name
					</label>
					<div class="_field-wrapper">
						<input type="text" id="lastname" name="lastname" placeholder="Type your last name" required />
					</div>
					<!--  This STARTS the Custom Objects section  -->
				</div>
			</div>
			<div class="sign_343-unique first-step">
				<div class="_form_element _x55807696 _full_width ">
					<label for="email" class="_form-label input-name">
						Email
					</label>
					<div class="_field-wrapper">
						<input type="text" id="email" name="email" placeholder="Type your email" required />
					</div>
					<!--  This STARTS the Custom Objects section  -->
				</div>
				<div class="_form_element _field29 _full_width ">
					<label for="field[29]" class="_form-label input-name">
						Phone number
					</label>
					<div class="_field-wrapper">
						<input class="user--country" type="text" id="field[29]" name="field[29]" value=""
							placeholder="Type your phone with country code" required />
					</div>
				</div>
			</div>
			<div class="_form_element _x32260579 _full_width hidden" hidden>
				<label for="field[154]" class="_form-label">
					EduQuest Date Time GMT
				</label>
				<div class="_field-wrapper">
				<input class="eduQuestDate" type="text" id="field[154]" name="field[154]" value="" placeholder="" />
				</div>
			</div>
			<div class="_form_element _x58190800 _full_width hidden" hidden >
				<label for="field[99]" class="_form-label">
					EduQuest Time
				</label>
				<div class="_field-wrapper">
				<input class="eduQuestTime" type="text" id="field[99]" name="field[99]" value="" placeholder="" />
				</div>
			</div>
			<div style="display:none" hidden class="_form_element _x56180502 _full_width " >
				<label for="field[125]" class="_form-label">
					Operational Timezone
				</label>
				<div class="_field-wrapper">
					<input class="input__timezone" type="text" id="field[125]" name="field[125]" value="" placeholder="" />
				</div>
			</div>
			<div class="sign_343-unique first-step">
				<div class="_form_element _field29 _full_width " >
					<label for="field[37]" class="_form-label input-name">
						Age
					</label>
					<div class="_field-wrapper">
						<input class="user--age" type="text" id="field[37]" name="field[37]" value="" placeholder="Type your age" required />
					</div>
				</div>
				<div class="_form_element _x94340268 _full_width " >
					<label for="field[190]" class="_form-label input-name">
						Country
					</label>
					<div class="_field-wrapper select454">
						<select id="select-country" name="field[190]" id="field[190]" required>
							<option value="---" disabled selected hidden>
								Choose your country
							</option>
							<option value="Afghanistan" >
								Afghanistan
							</option>
							<option value="Albania" >
								Albania
							</option>
							<option value="Algeria" >
								Algeria
							</option>
							<option value="American Samoa" >
								American Samoa
							</option>
							<option value="Andorra" >
								Andorra
							</option>
							<option value="Angola" >
								Angola
							</option>
							<option value="Anguilla" >
								Anguilla
							</option>
							<option value="Antarctica" >
								Antarctica
							</option>
							<option value="Antigua and Barbuda" >
								Antigua and Barbuda
							</option>
							<option value="Argentina" >
								Argentina
							</option>
							<option value="Armenia" >
								Armenia
							</option>
							<option value="Aruba" >
								Aruba
							</option>
							<option value="Australia" >
								Australia
							</option>
							<option value="Austria" >
								Austria
							</option>
							<option value="Azerbaijan" >
								Azerbaijan
							</option>
							<option value="Bahamas" >
								Bahamas
							</option>
							<option value="Bahrain" >
								Bahrain
							</option>
							<option value="Bangladesh" >
								Bangladesh
							</option>
							<option value="Barbados" >
								Barbados
							</option>
							<option value="Belgium" >
								Belgium
							</option>
							<option value="Belize" >
								Belize
							</option>
							<option value="Benin" >
								Benin
							</option>
							<option value="Bermuda" >
								Bermuda
							</option>
							<option value="Bhutan" >
								Bhutan
							</option>
							<option value="Bolivia" >
								Bolivia
							</option>
							<option value="Bosnia and Herzegovina" >
								Bosnia and Herzegovina
							</option>
							<option value="Botswana" >
								Botswana
							</option>
							<option value="Bouvet Island" >
								Bouvet Island
							</option>
							<option value="Brazil" >
								Brazil
							</option>
							<option value="British Indian Ocean Territory" >
								British Indian Ocean Territory
							</option>
							<option value="Brunei Darussalam" >
								Brunei Darussalam
							</option>
							<option value="Bulgaria" >
								Bulgaria
							</option>
							<option value="Burkina Faso" >
								Burkina Faso
							</option>
							<option value="Burundi" >
								Burundi
							</option>
							<option value="Cambodia" >
								Cambodia
							</option>
							<option value="Cameroon" >
								Cameroon
							</option>
							<option value="Canada" >
								Canada
							</option>
							<option value="Cape Verde" >
								Cape Verde
							</option>
							<option value="Cayman Islands" >
								Cayman Islands
							</option>
							<option value="Central African Republic" >
								Central African Republic
							</option>
							<option value="Chad" >
								Chad
							</option>
							<option value="Chile" >
								Chile
							</option>
							<option value="China" >
								China
							</option>
							<option value="Christmas Island" >
								Christmas Island
							</option>
							<option value="Cocos (Keeling) Islands" >
								Cocos (Keeling) Islands
							</option>
							<option value="Colombia" >
								Colombia
							</option>
							<option value="Comoros" >
								Comoros
							</option>
							<option value="Congo" >
								Congo
							</option>
							<option value="Congo, the Democratic Republic of the" >
								Congo, the Democratic Republic of the
							</option>
							<option value="Cook Islands" >
								Cook Islands
							</option>
							<option value="Costa Rica" >
								Costa Rica
							</option>
							<option value="Cote D&#039;Ivoire" >
								Cote D&#039;Ivoire
							</option>
							<option value="Croatia" >
								Croatia
							</option>
							<option value="Cuba" >
								Cuba
							</option>
							<option value="Cyprus" >
								Cyprus
							</option>
							<option value="Czech Republic" >
								Czech Republic
							</option>
							<option value="Denmark" >
								Denmark
							</option>
							<option value="Djibouti" >
								Djibouti
							</option>
							<option value="Dominica" >
								Dominica
							</option>
							<option value="Dominican Republic" >
								Dominican Republic
							</option>
							<option value="Ecuador" >
								Ecuador
							</option>
							<option value="Egypt" >
								Egypt
							</option>
							<option value="El Salvador" >
								El Salvador
							</option>
							<option value="Equatorial Guinea" >
								Equatorial Guinea
							</option>
							<option value="Eritrea" >
								Eritrea
							</option>
							<option value="Estonia" >
								Estonia
							</option>
							<option value="Ethiopia" >
								Ethiopia
							</option>
							<option value="Falkland Islands (Malvinas)" >
								Falkland Islands (Malvinas)
							</option>
							<option value="Faroe Islands" >
								Faroe Islands
							</option>
							<option value="Fiji" >
								Fiji
							</option>
							<option value="Finland" >
								Finland
							</option>
							<option value="France" >
								France
							</option>
							<option value="French Guiana" >
								French Guiana
							</option>
							<option value="French Polynesia" >
								French Polynesia
							</option>
							<option value="French Southern Territories" >
								French Southern Territories
							</option>
							<option value="Gabon" >
								Gabon
							</option>
							<option value="Gambia" >
								Gambia
							</option>
							<option value="Georgia" >
								Georgia
							</option>
							<option value="Germany" >
								Germany
							</option>
							<option value="Ghana" >
								Ghana
							</option>
							<option value="Gibraltar" >
								Gibraltar
							</option>
							<option value="Greece" >
								Greece
							</option>
							<option value="Greenland" >
								Greenland
							</option>
							<option value="Grenada" >
								Grenada
							</option>
							<option value="Guadeloupe" >
								Guadeloupe
							</option>
							<option value="Guam" >
								Guam
							</option>
							<option value="Guatemala" >
								Guatemala
							</option>
							<option value="Guinea" >
								Guinea
							</option>
							<option value="Guinea-Bissau" >
								Guinea-Bissau
							</option>
							<option value="Guyana" >
								Guyana
							</option>
							<option value="Haiti" >
								Haiti
							</option>
							<option value="Heard Island and Mcdonald Islands" >
								Heard Island and Mcdonald Islands
							</option>
							<option value="Holy See (Vatican City State)" >
								Holy See (Vatican City State)
							</option>
							<option value="Honduras" >
								Honduras
							</option>
							<option value="Hong Kong" >
								Hong Kong
							</option>
							<option value="Hungary" >
								Hungary
							</option>
							<option value="Iceland" >
								Iceland
							</option>
							<option value="India" >
								India
							</option>
							<option value="Indonesia" >
								Indonesia
							</option>
							<option value="Iran, Islamic Republic of" >
								Iran, Islamic Republic of
							</option>
							<option value="Iraq" >
								Iraq
							</option>
							<option value="Ireland" >
								Ireland
							</option>
							<option value="Israel" >
								Israel
							</option>
							<option value="Italy" >
								Italy
							</option>
							<option value="Jamaica" >
								Jamaica
							</option>
							<option value="Japan" >
								Japan
							</option>
							<option value="Jordan" >
								Jordan
							</option>
							<option value="Kazakhstan" >
								Kazakhstan
							</option>
							<option value="Kenya" >
								Kenya
							</option>
							<option value="Kiribati" >
								Kiribati
							</option>
							<option value="Korea, Democratic People&#039;s Republic of" >
								Korea, Democratic People&#039;s Republic of
							</option>
							<option value="Korea, Republic of" >
								Korea, Republic of
							</option>
							<option value="Kuwait" >
								Kuwait
							</option>
							<option value="Kyrgyzstan" >
								Kyrgyzstan
							</option>
							<option value="Lao People&#039;s Democratic Republic" >
								Lao People&#039;s Democratic Republic
							</option>
							<option value="Latvia" >
								Latvia
							</option>
							<option value="Lebanon" >
								Lebanon
							</option>
							<option value="Lesotho" >
								Lesotho
							</option>
							<option value="Liberia" >
								Liberia
							</option>
							<option value="Libyan Arab Jamahiriya" >
								Libyan Arab Jamahiriya
							</option>
							<option value="Liechtenstein" >
								Liechtenstein
							</option>
							<option value="Lithuania" >
								Lithuania
							</option>
							<option value="Luxembourg" >
								Luxembourg
							</option>
							<option value="Macao" >
								Macao
							</option>
							<option value="Macedonia, the Former Yugoslav Republic of" >
								Macedonia, the Former Yugoslav Republic of
							</option>
							<option value="Madagascar" >
								Madagascar
							</option>
							<option value="Malawi" >
								Malawi
							</option>
							<option value="Malaysia" >
								Malaysia
							</option>
							<option value="Maldives" >
								Maldives
							</option>
							<option value="Mali" >
								Mali
							</option>
							<option value="Malta" >
								Malta
							</option>
							<option value="Marshall Islands" >
								Marshall Islands
							</option>
							<option value="Martinique" >
								Martinique
							</option>
							<option value="Mauritania" >
								Mauritania
							</option>
							<option value="Mauritius" >
								Mauritius
							</option>
							<option value="Mayotte" >
								Mayotte
							</option>
							<option value="Mexico" >
								Mexico
							</option>
							<option value="Micronesia, Federated States of" >
								Micronesia, Federated States of
							</option>
							<option value="Moldova, Republic of" >
								Moldova, Republic of
							</option>
							<option value="Monaco" >
								Monaco
							</option>
							<option value="Mongolia" >
								Mongolia
							</option>
							<option value="Montenegro" >
								Montenegro
							</option>
							<option value="Montserrat" >
								Montserrat
							</option>
							<option value="Morocco" >
								Morocco
							</option>
							<option value="Mozambique" >
								Mozambique
							</option>
							<option value="Myanmar" >
								Myanmar
							</option>
							<option value="Namibia" >
								Namibia
							</option>
							<option value="Nauru" >
								Nauru
							</option>
							<option value="Nepal" >
								Nepal
							</option>
							<option value="Netherlands" >
								Netherlands
							</option>
							<option value="Netherlands Antilles" >
								Netherlands Antilles
							</option>
							<option value="New Caledonia" >
								New Caledonia
							</option>
							<option value="New Zealand" >
								New Zealand
							</option>
							<option value="Nicaragua" >
								Nicaragua
							</option>
							<option value="Niger" >
								Niger
							</option>
							<option value="Nigeria" >
								Nigeria
							</option>
							<option value="Niue" >
								Niue
							</option>
							<option value="Norfolk Island" >
								Norfolk Island
							</option>
							<option value="North Macedonia" >
								North Macedonia
							</option>
							<option value="Northern Mariana Islands" >
								Northern Mariana Islands
							</option>
							<option value="Norway" >
								Norway
							</option>
							<option value="Oman" >
								Oman
							</option>
							<option value="Pakistan" >
								Pakistan
							</option>
							<option value="Palau" >
								Palau
							</option>
							<option value="Palestinian Territory, Occupied" >
								Palestinian Territory, Occupied
							</option>
							<option value="Panama" >
								Panama
							</option>
							<option value="Papua New Guinea" >
								Papua New Guinea
							</option>
							<option value="Paraguay" >
								Paraguay
							</option>
							<option value="Peru" >
								Peru
							</option>
							<option value="Philippines" >
								Philippines
							</option>
							<option value="Pitcairn" >
								Pitcairn
							</option>
							<option value="Poland" >
								Poland
							</option>
							<option value="Portugal" >
								Portugal
							</option>
							<option value="Puerto Rico" >
								Puerto Rico
							</option>
							<option value="Qatar" >
								Qatar
							</option>
							<option value="Reunion" >
								Reunion
							</option>
							<option value="Romania" >
								Romania
							</option>
							<option value="Rwanda" >
								Rwanda
							</option>
							<option value="Saint Helena" >
								Saint Helena
							</option>
							<option value="Saint Kitts and Nevis" >
								Saint Kitts and Nevis
							</option>
							<option value="Saint Lucia" >
								Saint Lucia
							</option>
							<option value="Saint Pierre and Miquelon" >
								Saint Pierre and Miquelon
							</option>
							<option value="Saint Vincent and the Grenadines" >
								Saint Vincent and the Grenadines
							</option>
							<option value="Samoa" >
								Samoa
							</option>
							<option value="San Marino" >
								San Marino
							</option>
							<option value="Sao Tome and Principe" >
								Sao Tome and Principe
							</option>
							<option value="Saudi Arabia" >
								Saudi Arabia
							</option>
							<option value="Senegal" >
								Senegal
							</option>
							<option value="Serbia">
								Serbia
							</option>
							<option value="Seychelles" >
								Seychelles
							</option>
							<option value="Sierra Leone" >
								Sierra Leone
							</option>
							<option value="Singapore" >
								Singapore
							</option>
							<option value="Slovakia" >
								Slovakia
							</option>
							<option value="Slovenia" >
								Slovenia
							</option>
							<option value="Solomon Islands" >
								Solomon Islands
							</option>
							<option value="Somalia" >
								Somalia
							</option>
							<option value="South Africa" >
								South Africa
							</option>
							<option value="South Georgia and the South Sandwich Islands" >
								South Georgia and the South Sandwich Islands
							</option>
							<option value="Spain" >
								Spain
							</option>
							<option value="Sri Lanka" >
								Sri Lanka
							</option>
							<option value="Sudan" >
								Sudan
							</option>
							<option value="Suriname" >
								Suriname
							</option>
							<option value="Svalbard and Jan Mayen" >
								Svalbard and Jan Mayen
							</option>
							<option value="Swaziland" >
								Swaziland
							</option>
							<option value="Sweden" >
								Sweden
							</option>
							<option value="Switzerland" >
								Switzerland
							</option>
							<option value="Syrian Arab Republic" >
								Syrian Arab Republic
							</option>
							<option value="Taiwan, Province of China" >
								Taiwan, Province of China
							</option>
							<option value="Tajikistan" >
								Tajikistan
							</option>
							<option value="Tanzania, United Republic of" >
								Tanzania, United Republic of
							</option>
							<option value="Thailand" >
								Thailand
							</option>
							<option value="Timor-Leste" >
								Timor-Leste
							</option>
							<option value="Togo" >
								Togo
							</option>
							<option value="Tokelau" >
								Tokelau
							</option>
							<option value="Tonga" >
								Tonga
							</option>
							<option value="Trinidad and Tobago" >
								Trinidad and Tobago
							</option>
							<option value="Tunisia" >
								Tunisia
							</option>
							<option value="Turkey" >
								Turkey
							</option>
							<option value="Turkmenistan" >
								Turkmenistan
							</option>
							<option value="Turks and Caicos Islands" >
								Turks and Caicos Islands
							</option>
							<option value="Tuvalu" >
								Tuvalu
							</option>
							<option value="Uganda" >
								Uganda
							</option>
							<option value="Ukraine" >
								Ukraine
							</option>
							<option value="United Arab Emirates" >
								United Arab Emirates
							</option>
							<option value="United Kingdom" >
								United Kingdom
							</option>
							<option value="United States" >
								United States
							</option>
							<option value="United States Minor Outlying Islands" >
								United States Minor Outlying Islands
							</option>
							<option value="Uruguay" >
								Uruguay
							</option>
							<option value="Uzbekistan" >
								Uzbekistan
							</option>
							<option value="Vanuatu" >
								Vanuatu
							</option>
							<option value="Venezuela" >
								Venezuela
							</option>
							<option value="Viet Nam" >
								Viet Nam
							</option>
							<option value="Virgin Islands, British" >
								Virgin Islands, British
							</option>
							<option value="Virgin Islands, U.s." >
								Virgin Islands, U.s.
							</option>
							<option value="Wallis and Futuna" >
								Wallis and Futuna
							</option>
							<option value="Western Sahara" >
								Western Sahara
							</option>
							<option value="Yemen" >
								Yemen
							</option>
							<option value="Zambia" >
								Zambia
							</option>
							<option value="Zimbabwe" >
								Zimbabwe
							</option>
							<!-- <option value="Moldova" >
								Moldova
							</option> -->
							<!-- <option value="UK" >
								UK
							</option> -->
							<!-- <option value="Czech" >
								Czech
							</option> -->
						</select>
						<div id="select-err-notify" style="display:none;" class="_error _below"><div class="_error-arrow"></div><div class="_error-inner">This field is required.</div></div>
					</div>
				</div>
			</div>
			<div style="display:none" hidden class="_form_element _x73226253 _full_width">
				<label for="field[219]" class="_form-label">
					Referral Code
				</label>
				<div class="_field-wrapper">
					<input class="referal--code" type="text" id="field[219]" name="field[219]" value="-" placeholder="" />
				</div>
			</div>
			<div hidden class="_form_element _field194 _full_width hidden" >
				<label for="field[217]" class="_form-label input-name">
				Start Date
				</label>
				<div class="_field-wrapper select454">
					<select name="field[217]" id="field[217]" class="date-select" required>
						<option class="option__select" id="option-june-17" value="June 17 (deadline - June 15)" >
							June 17 (deadline - June 15)
						</option>
						<option class="option__select" id="option-may-26" value="May 26 (deadline - May 19)" >
							May 26 (deadline - May 19)
						</option>
						<option class="option__select" id="option-july-21" value="July 21 (deadline - July 17)" >
							July 21 (deadline - July 17)
						</option>
						<option class="option__select" id="option-july-15" value="July 15 (deadline - July 11)" >
							July 15 (deadline - July 11)
						</option>
						<option class="option__select" id="option-june-23" value="June 23 (deadline - June 16)" >
							June 23 (deadline - June 16)
						</option>
						<option class="option__select" id="option-august-11" value="August 11 (deadline - August 7)" >
							August 11 (deadline - August 7)
						</option>
						<option class="option__select" id="option-august-19" value="August 19 (deadline - August 15)" >
							August 19 (deadline - August 15)
						</option>
						<option class="option__select" id="option-september-1" value="September 1 (deadline - August 28)" >
							September 1 (deadline - August 28)
						</option>
						<option class="option__select" id="option-september-16" value="September 16 (deadline - September 12)" >
							September 16 (deadline - September 12)
						</option>
						<option class="option__select" id="option-future" value="Future (select if none of the options above are acceptable and we will inform you on the next days)" >
							Future (select if none of the options above are acceptable)
						</option>
					</select>
				</div>
			</div>

			<div class="--hpwsdfsdfds _form_element _x19004564 _full_width first-step">
				<label for="field[238]" class="_form-label input-name">
					How did you hear about us?
				</label>
				<div class="_field-wrapper select454">
					<select id="how-did-hear" name="field[238]" id="field[238]">
						<option value="---" disabled selected hidden>
							Choose one of the options
						</option>
						<option value="LinkedIn">
							LinkedIn
						</option>
						<option value="Telegram">
							Telegram
						</option>
						<option value="Facebook">
							Facebook
						</option>
						<option value="Instagram">
							Instagram
						</option>
						<option value="Google">
							Google
						</option>
						<option value="My friend is a Nobel Intern">
							My friend is a Nobel Intern
						</option>
						<option value="Other">
							Other
						</option>
					</select>
					<div id="select-err-notify-3" style="display:none;" class="_error _below"><div class="_error-arrow"></div><div class="_error-inner">This field is required.</div></div>
				</div>
			</div>


			<div class="_form_element _x14730494 _full_width --finish-step --checkboxes" >
				<fieldset class="_form-fieldset">
					<div class="_row _checkbox-radio">
					<div id="checkbox-err-1" style="display:none;" class="_error-inner _no_arrow _below">This checkbox is required.</div>
					<input id="ca[12][v]I understand I need to meet all the requirements below to be eligible for participation in Nobel programs: PC / Laptop (NO tablets / phones) - Windows / Apple / Chromebook Headset with boom mic / Earphones with mic / Gaming headset Working webcam Noise-free environment Stable internet connection" type="checkbox" name="ca[12][v][]" value="I understand I need to meet all the requirements below to be eligible for participation in Nobel programs: PC / Laptop (NO tablets / phones) - Windows / Apple / Chromebook Headset with boom mic / Earphones with mic / Gaming headset Working webcam Noise-free environment Stable internet connection" class="any --checkbox-req-1" >
					<span>
						<label class="checkbox-text" for="ca[12][v]I understand I need to meet all the requirements below to be eligible for participation in Nobel programs: PC / Laptop (NO tablets / phones) - Windows / Apple / Chromebook Headset with boom mic / Earphones with mic / Gaming headset Working webcam Noise-free environment Stable internet connection">
						I understand I need to meet all the requirements below to be eligible for participation in Nobel programs: 
							<br/>* PC / Laptop (NO tablets / phones) - Windows / Apple / Chromebook
							<br/>* Headset with boom mic / Earphones with mic / Gaming headset
							<br/>* Working webcam
							<br/>* Noise-free environment
							<br/>* Stable internet connection
						</label>
					</span>
					</div>
				</fieldset>
			</div>
			<div class="_form_element _x42222535 _full_width --finish-step --checkboxes" >
				<fieldset class="_form-fieldset">
					<div class="_row _checkbox-radio">
					<div id="checkbox-err-2" style="display:none;" class="_error-inner _no_arrow _below">This checkbox is required.</div>
					<input id="ca[13][v]I acknowledge that I have completely read and fully understand the Media Release and agree to be bound thereby. " type="checkbox" name="ca[13][v][]" value="I acknowledge that I have completely read and fully understand the Media Release and agree to be bound thereby. " class="any --checkbox-req-2" >
					<span>
						<label class="checkbox-text" for="ca[13][v]I acknowledge that I have completely read and fully understand the Media Release and agree to be bound thereby. ">
						I acknowledge that I have completely read and fully understand the <a class="checkbox-text" href="https://www.nobelnavigators.com/media-release/" target="_blank">Media Release</a> and agree to be bound thereby.
						</label>
					</span>
					</div>
				</fieldset>
			</div>

			<div class="recaptha__wrap --finish-step --checkboxes" style="position: relative;">
				<div id="checkbox-err-recaptha" style="display:none;" class="_error-inner _no_arrow _below">Recaptcha  is required.</div>
				<div class="g-recaptcha" data-theme="light" data-sitekey="6Lcb52UmAAAAAMeDUG3NX2_hHDdwRSRbtmxHUvJh"></div>
			</div>
			
			<div class="_button-wrapper _full_width">
				<button id="_form_71_submit" class="_submit sign__form-btn btn default__btn btn-white btn-animate" type="submit">
					Next step
				</button>
			</div>
			<div class="_clear-element">
			</div>
		</div>
		<div class="_form-thank-you" style="display:none;">
		</div>
	</form>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script>
	// Custom notify for select

	function validateDisplayStyling(selector, displayValue, isReturn, returnValue) {
		$(selector).css('display', displayValue)
		if(isReturn) return returnValue
	}

	function validateSelect(){
		const selectCountryElement = $('#select-country')
		if (selectCountryElement.val() != '---') validateDisplayStyling("#select-err-notify", 'none', false, false)
		else validateDisplayStyling("#select-err-notify", 'block', false, false)
	}

	$('#select-country').on('change', function(){
		validateSelect();
	})

	// 2 step
	function validateWhatIsYour(){
		const validateWhatIsYourElement = $('.validate-What-Is-Your')
		if (validateWhatIsYourElement.val() != '') validateDisplayStyling("#select-err-notify-1", 'none', true, true)
		else validateDisplayStyling("#select-err-notify-1", 'block', true, false)
	}

	$('.validate-What-Is-Your').on('input', function(){
		validateWhatIsYour();
	})

	function validateTellUsAbout(){
		const validateTellUsAboutElement = $('.validate-Tell-Us-About')
		if (validateTellUsAboutElement.val() != '') validateDisplayStyling("#select-err-notify-2", 'none', true, true)
		else validateDisplayStyling("#select-err-notify-2", 'block', true, false)
	}

	$('.validate-Tell-Us-About').on('input', function(){
		validateTellUsAbout();
	})

	function validateHowDidHear(){
		const howDidYouHearElement = $('#how-did-hear')
		if (howDidYouHearElement.val() != '---') validateDisplayStyling("#select-err-notify-3", 'none', true, true)
		else validateDisplayStyling("#select-err-notify-3", 'block', true, false)
	}

	$('#how-did-hear').on('change', function(){
		validateHowDidHear();
	})

	function validateCheckboxReq1(){
		const propChecked = $('.--checkbox-req-1').prop("checked")
		if (propChecked) validateDisplayStyling("#checkbox-err-1", 'none', true, true)
		else validateDisplayStyling("#checkbox-err-1", 'block', true, false)
	}

	$('.--checkbox-req-1').on('change', function(){
		validateCheckboxReq1();
	})

	function validateCheckboxReq2(){
		const propChecked = $('.--checkbox-req-2').prop("checked")
		if (propChecked) validateDisplayStyling("#checkbox-err-2", 'none', true, true)
		else validateDisplayStyling("#checkbox-err-2", 'block', true, false)
	}

	$('.--checkbox-req-2').on('change', function(){
		validateCheckboxReq2();
	})

	function recaptha(){
		const grecaptchaResponse = grecaptcha.getResponse()
		if (grecaptchaResponse != '') validateDisplayStyling("#checkbox-err-recaptha", 'none', true, true)
		else validateDisplayStyling("#checkbox-err-recaptha", 'block', true, false)
	}

	// Validate 1 step start
	let nextStep = true;
	let ABTest = true;
	$("._submit").on("click", function(){
		if ($(this).hasClass('last-step')){
			validateWhatIsYour()
			validateTellUsAbout()
			validateHowDidHear()
			validateCheckboxReq1()
			validateCheckboxReq2()
			recaptha()
		}
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let phone = $(".user--country").val();
		let age = $(".user--age").val();
		validateSelect();

		function IsEmail(email) {
			var regex =
				/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			return regex.test(email)
		}

		if(IsEmail(email) && firstname.length >= 1 && lastname.length >= 1 && phone.length >= 1 && age.length >= 1 && document.getElementById("select-country").value != "---"){
			if (nextStep){
				$('._form-content').addClass('last-step')
				$('._submit').addClass('last-step')
				$("._submit").text('Submit')

				nextStep = false;

				$("#select-err-notify-1").css('display', 'none')
				$("#select-err-notify-2").css('display', 'none')
				$("#select-err-notify-3").css('display', 'none')
				$("#checkbox-err-1").css('display', 'none')
				$("#checkbox-err-2").css('display', 'none')
			}
		}
	})
	// Validate 1 step end
</script>

<script type="text/javascript">
	// New script start
	window.cfields = {"29":"intern_phone","125":"operational_timezone","154":"eduquest_date_time_gmt","217":"nearest_start_date","37":"intern_age","219":"referral_code","190":"interns_country","99":"eduquest_time","236":"your_motivation","237":"tell_us_about_a_situation_where_you_felt_like_you_grew_as_a_person_please_write_23_sentences","238":"how_did_you_hear_about_us"};
	// New script end

	// Old script start
	// window.cfields = {"29":"intern_phone","125":"operational_timezone","154":"eduquest_date_time_gmt","217":"nearest_start_date","37":"intern_age","219":"referral_code","190":"interns_country","99":"eduquest_time","221":"internship_schedule","168":"by_submitting_this_form_i_agree_to_receive_email_invitations_for_the_events"};
	// Old script end

	window._show_thank_you = function(id, message, trackcmp_url, email) {
	var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
	form.querySelector('._form-content').style.display = 'none';
	thank_you.innerHTML = message;
	thank_you.style.display = 'block';
	const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
	var visitorObject = window[vgoAlias];
	if (email && typeof visitorObject !== 'undefined') {
		visitorObject('setEmail', email);
		visitorObject('update');
	} else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
		// Site tracking URL to use after inline form submission.
		_load_script(trackcmp_url);
	}
	if (typeof window._form_callback !== 'undefined') window._form_callback(id);
	};
	window._show_error = function(id, message, html) {
	var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
	if (old_error) old_error.parentNode.removeChild(old_error);
	err.innerHTML = message;
	err.className = '_error-inner _form_error _no_arrow';
	var wrapper = document.createElement('div');
	wrapper.className = '_form-inner';
	wrapper.appendChild(err);
	button.parentNode.insertBefore(wrapper, button);
	document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
	if (html) {
		var div = document.createElement('div');
		div.className = '_error-html';
		div.innerHTML = html;
		err.appendChild(div);
	}
	};
	window._load_script = function(url, callback) {
	var head = document.querySelector('head'), script = document.createElement('script'), r = false;
	script.type = 'text/javascript';
	script.charset = 'utf-8';
	script.src = url;
	if (callback) {
		script.onload = script.onreadystatechange = function() {
		if (!r && (!this.readyState || this.readyState == 'complete')) {
			r = true;
			callback();
		}
		};
	}
	head.appendChild(script);
	};
	(function() {
	if (window.location.search.search("excludeform") !== -1) return false;
	var getCookie = function(name) {
		var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
		return match ? match[2] : null;
	}
	var setCookie = function(name, value) {
		var now = new Date();
		var time = now.getTime();
		var expireTime = time + 1000 * 60 * 60 * 24 * 365;
		now.setTime(expireTime);
		document.cookie = name + '=' + value + '; expires=' + now + ';path=/; Secure; SameSite=Lax;';// cannot be HttpOnly
	}
		var addEvent = function(element, event, func) {
		if (element.addEventListener) {
		element.addEventListener(event, func);
		} else {
		var oldFunc = element['on' + event];
		element['on' + event] = function() {
			oldFunc.apply(this, arguments);
			func.apply(this, arguments);
		};
		}
	}
	var _removed = false;
	var form_to_submit = document.getElementById('_form_71_');
	var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

	var getUrlParam = function(name) {
		var params = new URLSearchParams(window.location.search);
		return params.get(name) || false;
	};

	for (var i = 0; i < allInputs.length; i++) {
		var regexStr = "field\\[(\\d+)\\]";
		var results = new RegExp(regexStr).exec(allInputs[i].name);
		allInputs[i].dataset.name = results !== undefined ? window.cfields[results[1]] : allInputs[i].name;
		var fieldVal = getUrlParam(allInputs[i].dataset.name);

		if (fieldVal) {
		if (allInputs[i].dataset.autofill === "false") {
			continue;
		}
		if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
			if (allInputs[i].value == fieldVal) {
			allInputs[i].checked = true;
			}
		} else {
			allInputs[i].value = fieldVal;
		}
		}
	}

	var remove_tooltips = function() {
		for (var i = 0; i < tooltips.length; i++) {
		tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
		}
		tooltips = [];
	};
	var remove_tooltip = function(elem) {
		for (var i = 0; i < tooltips.length; i++) {
		if (tooltips[i].elem === elem) {
			tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
			tooltips.splice(i, 1);
			return;
		}
		}
	};
	var create_tooltip = function(elem, text) {
		var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
		if (elem.type != 'radio' && elem.type != 'checkbox') {
		tooltip.className = '_error';
		arrow.className = '_error-arrow';
		inner.className = '_error-inner';
		inner.innerHTML = text;
		tooltip.appendChild(arrow);
		tooltip.appendChild(inner);
		elem.parentNode.appendChild(tooltip);
		} else {
		tooltip.className = '_error-inner _no_arrow';
		tooltip.innerHTML = text;
		elem.parentNode.insertBefore(tooltip, elem);
		new_tooltip.no_arrow = true;
		}
		new_tooltip.tip = tooltip;
		new_tooltip.elem = elem;
		tooltips.push(new_tooltip);
		return new_tooltip;
	};
	var resize_tooltip = function(tooltip) {
		var rect = tooltip.elem.getBoundingClientRect();
		var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
		if (scrollPosition < 40) {
		tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
		} else {
		tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
		}
	};
	var resize_tooltips = function() {
		if (_removed) return;
		for (var i = 0; i < tooltips.length; i++) {
		if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
		}
	};
	var validate_field = function(elem, remove) {
		var tooltip = null, value = elem.value, no_error = true;
		const elementClassName = elem.className;
		const elementId = elem.id;

		function requiredErrorDisplay(message) {
			elem.className = elementClassName + ' _has_error';
			no_error = false;
			tooltip = create_tooltip(elem, message);
		}

		remove ? remove_tooltip(elem) : false;
		if (elem.type != 'checkbox') elem.className = elementClassName.replace(/ ?_has_error ?/g, '');
		if (elem.getAttribute('required')) {
			if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elementClassName))) {
				var elems = form_to_submit.elements[elem.name];
				if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
					no_error = elem.checked;
				}
				else {
					no_error = false;
					for (var i = 0; i < elems.length; i++) {
						if (elems[i].checked) no_error = true;
					}
				}
				if (!no_error) {
					tooltip = create_tooltip(elem, "This checkbox is required.");
				}
			} 
			else if (elem.type =='checkbox') {
				var elems = form_to_submit.elements[elem.name], found = false, err = [];
				no_error = true;
				for (var i = 0; i < elems.length; i++) {
					if (!elems[i].getAttribute('required')) continue;
					if (!found && elems[i] !== elem) return true;
					found = true;
					elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
						if (!elems[i].checked) {
							no_error = false;
							elems[i].className = elems[i].className + ' _has_error';
							err.push("Checking %s is required".replace("%s", elems[i].value));
						}
				}
				if (!no_error) tooltip = create_tooltip(elem, err.join('<br/>'));
			} 

			else if (elem.tagName == 'SELECT') {
				var selected = true;
				if (elem.multiple) {
					selected = false;
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected) {
							selected = true;
							break;
						}
					}
				} 
				else {
					for (var i = 0; i < elem.options.length; i++) {
						if (elem.options[i].selected && (!elem.options[i].value || (elem.options[i].value.match(/\n/g)))) {
							selected = false;
						}
					}
				}
				if (!selected) requiredErrorDisplay("This checkbox is required.")
			} 

			else requiredErrorDisplay("This field is required.")

		}

		if(no_error) {
			if ((elementId == 'field[]' || elementId == 'ca[11][v]')) {
				if (elementClassName.includes('phone-input-error')) {
					elem.className = elementClassName + ' _has_error';
					no_error = false;
				}
			}
			if (elem.name == 'email') {
				const emailRegex = /^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i
				if (!value.match(emailRegex)) requiredErrorDisplay("Enter a valid email address.")
			}
			if (/date_field/.test(elementClassName)) {
				const dateRegex = /^\d\d\d\d-\d\d-\d\d$/
				if (!value.match(dateRegex)) requiredErrorDisplay("Enter a valid date.")
			}
		}
		tooltip ? resize_tooltip(tooltip) : false;
		return no_error;
	};





	var needs_validate = function(el) {
			if(el.getAttribute('required') !== null){
				return true
			}
			if(el.name === 'email' && el.value !== ""){
				return true
			}

		if((el.id == 'field[]' || el.id == 'ca[11][v]') && el.className.includes('phone-input-error')){
				return true
			}

			return false
	};
	var validate_form = function(e) {
		var err = form_to_submit.querySelector('._form_error'), no_error = true;
		if (!submitted) {
		submitted = true;
		for (var i = 0, len = allInputs.length; i < len; i++) {
			var input = allInputs[i];
			if (needs_validate(input)) {
			if (input.type == 'tel') {
				addEvent(input, 'blur', function() {
				this.value = this.value.trim();
				validate_field(this, true);
				});
			}
			if (input.type == 'text' || input.type == 'number' || input.type == 'time') {
				addEvent(input, 'blur', function() {
				this.value = this.value.trim();
				validate_field(this, true);
				});
				addEvent(input, 'input', function() {
				validate_field(this, true);
				});
			} else if (input.type == 'radio' || input.type == 'checkbox') {
				(function(el) {
				var radios = form_to_submit.elements[el.name];
				for (var i = 0; i < radios.length; i++) {
					addEvent(radios[i], 'click', function() {
					validate_field(el, true);
					});
				}
				})(input);
			} else if (input.tagName == 'SELECT') {
				addEvent(input, 'change', function() {
				validate_field(this, true);
				});
			} else if (input.type == 'textarea'){
				addEvent(input, 'input', function() {
				validate_field(this, true);
				});
			}
			}
		}
		}
		remove_tooltips();
		for (var i = 0, len = allInputs.length; i < len; i++) {
		var elem = allInputs[i];
		if (needs_validate(elem)) {
			if (elem.tagName.toLowerCase() !== "select") {
			elem.value = elem.value.trim();
			}
			validate_field(elem) ? true : no_error = false;
		}
		}
		if (!no_error && e) {
		e.preventDefault();
		}
		resize_tooltips();

		// Custom validation start
		if (ABTest == true){
			if ($('.validate-What-Is-Your').val() == '' || $('.validate-Tell-Us-About').val() == '' || document.getElementById("how-did-hear").value == '---' || $('.--checkbox-req-1').prop("checked") != true || $('.--checkbox-req-2').prop("checked") != true){
				return false
			}
		} else {
			if ($('.--checkbox-req-1').prop("checked") != true || $('.--checkbox-req-2').prop("checked") != true){
				return false
			}
		}
		// Custom validation end

		return no_error;
	};
	addEvent(window, 'resize', resize_tooltips);
	addEvent(window, 'scroll', resize_tooltips);

	var hidePhoneInputError = function(inputId) {
		var errorMessage =  document.getElementById("error-msg-" + inputId);
		var input = document.getElementById(inputId);
		errorMessage.classList.remove("phone-error");
		errorMessage.classList.add("phone-error-hidden");
		input.classList.remove("phone-input-error");
	};

	var initializePhoneInput = function(input, defaultCountry) {
		return window.intlTelInput(input, {
		utilsScript: "https://unpkg.com/intl-tel-input@17.0.18/build/js/utils.js",
		autoHideDialCode: false,
		separateDialCode: true,
		initialCountry: defaultCountry,
		preferredCountries: []
		});
	}

	var setPhoneInputEventListeners = function(inputId, input, iti) {
		input.addEventListener('blur', function() {
		var errorMessage = document.getElementById("error-msg-" + inputId);
		if (input.value.trim()) {
			if (iti.isValidNumber()) {
			iti.setNumber(iti.getNumber());
			if (errorMessage.classList.contains("phone-error")){
				hidePhoneInputError(inputId);
			}
			} else {
			showPhoneInputError(inputId)
			}
		} else {
			if (errorMessage.classList.contains("phone-error")){
			hidePhoneInputError(inputId);
			}
		}
		});

		input.addEventListener("countrychange", function() {
		iti.setNumber('');
		});

		input.addEventListener("keydown", function(e) {
			var charCode = (e.which) ? e.which : e.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 8) {
				e.preventDefault();
		}
		});
	};

	var showPhoneInputError = function(inputId) {
		var errorMessage =  document.getElementById("error-msg-" + inputId);
		var input = document.getElementById(inputId);
		errorMessage.classList.add("phone-error");
		errorMessage.classList.remove("phone-error-hidden");
		input.classList.add("phone-input-error");
	};


		var _form_serialize = function(form){if(!form||form.nodeName!=="FORM"){return }var i,j,q=[];for(i=0;i<form.elements.length;i++){if(form.elements[i].name===""){continue}switch(form.elements[i].nodeName){case"INPUT":switch(form.elements[i].type){case"tel":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].previousSibling.querySelector('div.iti__selected-dial-code').innerText)+encodeURIComponent(" ")+encodeURIComponent(form.elements[i].value));break;case"text":case"number":case"date":case"time":case"hidden":case"password":case"button":case"reset":case"submit":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"checkbox":case"radio":if(form.elements[i].checked){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value))}break;case"file":break}break;case"TEXTAREA":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"SELECT":switch(form.elements[i].type){case"select-one":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break;case"select-multiple":for(j=0;j<form.elements[i].options.length;j++){if(form.elements[i].options[j].selected){q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].options[j].value))}}break}break;case"BUTTON":switch(form.elements[i].type){case"reset":case"submit":case"button":q.push(form.elements[i].name+"="+encodeURIComponent(form.elements[i].value));break}break}}return q.join("&")};
	var form_submit = function(e) {
		e.preventDefault();
		if (validate_form()) {
		// use this trick to get the submit button & disable it using plain javascript
		// Test recaptha
		if (grecaptcha.getResponse() == ''){
			return false
		}
		document.querySelector('#_form_71_submit').disabled = true;
				var serialized = _form_serialize(document.getElementById('_form_71_')).replace(/%0A/g, '\\n');
		var err = form_to_submit.querySelector('._form_error');
		err ? err.parentNode.removeChild(err) : false;
		_load_script('https://nobelcoaching22331.activehosted.com/proc.php?' + serialized + '&jsonp=true');
		document.getElementById('_form_71_submit').setAttribute("disabled", "");
		document.getElementById('form').classList.add('submited');
		}
		return false;
	};
	addEvent(form_to_submit, 'submit', form_submit);
	})();
</script>

<script>
	 function formCurrentUrl(){
		document.getElementById("_form_71_").action = 'https://nobelcoaching22331.activehosted.com/proc.php';
	}

	setTimeout(formCurrentUrl, 5000);
</script>

<script>
	// !=== Form logic start ===!

	let datesToRemove = [
		{ date: '05/20/2023', options: 'may-26' },
		{ date: '06/16/2023', options: 'june-17' },
		{ date: '06/17/2023', options: 'june-23' },
		{ date: '07/12/2023', options: 'july-15' },
		{ date: '07/18/2023', options: 'july-21' },
		{ date: '08/08/2023', options: 'august-11' },
		{ date: '08/16/2023', options: 'august-19' },
		{ date: '08/29/2023', options: 'september-1' },
		{ date: '09/13/2023', options: 'september-16' },
	]

	const currentDate = new Date()

	datesToRemove.forEach(dateToRemove => {
		if(currentDate > new Date(dateToRemove.date + ' 0:00:00')) {
			$(option[value="${dateToRemove.options}"]).remove()
		}
	})

	// 👇️ Example date and time in UTC
	let utcDate = new Date().setUTCHours(14, 0);
	let hours = new Date(utcDate).getHours();
	let minutes = new Date(utcDate).getMinutes().toString().padStart(2, '0');
	
	let userTimeZone = getTimeZone();

	function getTimeZone() {
		var offset = new Date().getTimezoneOffset(), o = Math.abs(offset);
		return (offset < 0 ? "+" : "-") + ("00" + Math.floor(o / 60)).slice(-2) + ":" + ("00" + (o % 60)).slice(-2);
	}
// 	function getTimeZone() {
//     const offsetInMinutes = new Date().getTimezoneOffset();
//     const hours = Math.abs(Math.floor(offsetInMinutes / 60));
//     const minutes = Math.abs(offsetInMinutes % 60);
//     const sign = offsetInMinutes < 0 ? '+' : '-';

//     const formattedHours = hours.toString().padStart(2, '0');
//     const formattedMinutes = minutes.toString().padStart(2, '0');

//     const timezoneGMT = `${sign}${formattedHours}:${formattedMinutes}`;
//     return timezoneGMT;
//   }

	let userTimeZoneLocal = Intl.DateTimeFormat().resolvedOptions().timeZone;
	if (userTimeZoneLocal == 'Europe/Kiev'){
		userTimeZoneLocal = 'Europe/Kyiv';
	}

	$('.input__timezone').attr('value', 'GMT' + userTimeZone + ' ' + userTimeZoneLocal)

	$('select, input[name="radio"]').on('change', function(){
		formLogic();
	})
	
	function formLogic(){
		const monthNames = ["January", "February", "March", "April", "May", "June",
		"July", "August", "September", "October", "November", "December"
		];
		let option = $('input[name="radio"]:checked').val();
		let selectWeekday = $('select[name="weekday"]').val();
		let selectWeekend = $('select[name="weekend"]').val();
		if (option == undefined){
			return
		} else {
			if (option == "weekday"){
				$('.weekday').addClass('active')
				$('.weekend').removeClass('active')
				if (selectWeekday == 0){
					return
				}
				$('.date__content').addClass('active')
				$('.date__program span').text('Weekday Program')

				if (selectWeekday == "may-26"){
					// UTC date 
					let eduQuesDate = new Date('05/26/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('05/19/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'May 26, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'May 26, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-may-26').removeClass('hidden');
					$('#option-may-26').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('May 26, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("May 26, 2023")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
				if (selectWeekday == "june-23"){
					// UTC date 
					let eduQuesDate = new Date('06/23/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('06/16/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'June 23, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'June 23, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-june-23').removeClass('hidden');
					$('#option-june-23').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('June 23, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("June 23, 2023")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
				if (selectWeekday == "july-21"){
					// UTC date 
					let eduQuesDate = new Date('07/21/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('07/17/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'July 21, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'July 21, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-july-21').removeClass('hidden');
					$('#option-july-21').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('July 21, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("July 21, 2023")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
				if (selectWeekday == "august-11"){
					// UTC date 
					let eduQuesDate = new Date('08/11/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('08/07/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'August 11, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'August 11, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-august-11').removeClass('hidden');
					$('#option-august-11').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('August 11, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("August 11, 2023")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
				if (selectWeekday == "september-1"){
					// UTC date 
					let eduQuesDate = new Date('09/01/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('08/28/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'September 1, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'September 1, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-september-1').removeClass('hidden');
					$('#option-september-1').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('September 1, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("September 1, 2023")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
				if (selectWeekday == "future"){
					// UTC time in
					$('.eduQuestDate').attr('value', 'Future')
					// GMT time in
					$('.eduQuestTime').attr('value', 'Future')

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-future').removeClass('hidden');
					$('#option-future').attr('selected', 'selected');

					$("#date").css('display', 'none')
					$("#deadline").css('display', 'none')
					// Change date in popup form
					$("#popup--date").html('Future')
					$("#line-1").text("---")
					$("#line-2").text("4 meetings/week, 2 hours each")
					$("#line-3").text(`Every Monday, Tuesday, Wednesday, Friday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("2 months")
				}
			}
			if (option == "weekend"){
				$('.weekend').addClass('active')
				$('.weekday').removeClass('active')
				if (selectWeekend == 0){
					return
				}
				$('.date__content').addClass('active')
				$('.date__program span').text('Weekend Program')

				if (selectWeekend == "june-17"){
					// UTC date 
					let eduQuesDate = new Date('06/17/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('06/15/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'June 17, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'June 17, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-june-17').removeClass('hidden');
					$('#option-june-17').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('June 17, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("June 17, 2023")
					$("#line-2").text("2 meetings/week, 2 hours each")
					$("#line-3").text(`Saturday/Sunday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("4 months")
				}
				if (selectWeekend == "july-15"){
					// UTC date 
					let eduQuesDate = new Date('07/15/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('07/11/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'July 15, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'July 15, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-july-15').removeClass('hidden');
					$('#option-july-15').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('July 15, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("July 15, 2023")
					$("#line-2").text("2 meetings/week, 2 hours each")
					$("#line-3").text(`Saturday/Sunday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("4 months")
				}
				if (selectWeekend == "august-19"){
					// UTC date 
					let eduQuesDate = new Date('08/19/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('08/15/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'August 19, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'August 19, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-august-19').removeClass('hidden');
					$('#option-august-19').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('August 19, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("August 19, 2023")
					$("#line-2").text("2 meetings/week, 2 hours each")
					$("#line-3").text(`Saturday/Sunday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("4 months")
				}
				if (selectWeekend == "september-16"){
					// UTC date 
					let eduQuesDate = new Date('09/16/2023 2:00:00 PM UTC');
					eduQuesDate.toString();
					// Deadline date 
					let eduQuesDeadline = new Date('09/12/2023 23:59:00');
					// UTC time in
					$('.eduQuestDate').attr('value', 'September 16, 2023 14:00')
					// GMT time in
					$('.eduQuestTime').attr('value', 'September 16, 2023 ' + eduQuesDate.getHours() + ':' + eduQuesDate.getMinutes() + '0 GMT' + userTimeZone + ', ' + userTimeZoneLocal)

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-september-16').removeClass('hidden');
					$('#option-september-16').attr('selected', 'selected');

					$("#date").css('display', 'block')
					$("#deadline").css('display', 'block')
					// Change date in popup form
					$("#popup--date").html('September 16, 2023')
					$("#line-0").text(monthNames[eduQuesDeadline.getMonth()] + ' ' + eduQuesDeadline.getDate() + ' ' + eduQuesDeadline.getHours() + ':' + eduQuesDeadline.getMinutes() + ', ' + eduQuesDeadline.getFullYear() + ' (GMT' + userTimeZone + ', ' + userTimeZoneLocal + ')')
					$("#line-1").text("September 16, 2023")
					$("#line-2").text("2 meetings/week, 2 hours each")
					$("#line-3").text(`Saturday/Sunday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("4 months")
				}
				if (selectWeekend == "future"){
					// UTC time in
					$('.eduQuestDate').attr('value', 'Future')
					// GMT time in
					$('.eduQuestTime').attr('value', 'Future')

					$('.option__select').removeAttr('selected')
					$('.option__select').addClass('hidden')
					$('#option-future').removeClass('hidden');
					$('#option-future').attr('selected', 'selected');

					$("#date").css('display', 'none')
					$("#deadline").css('display', 'none')
					// Change date in popup form
					$("#popup--date").html('Future')
					$("#line-1").text("---")
					$("#line-2").text("2 meetings/week, 2 hours each")
					$("#line-3").text(`Saturday/Sunday, ${hours}:${minutes} (GMT ${userTimeZone}, ${userTimeZoneLocal})`)
					$("#line-4").text("4 months")
				}
			}
		}
	}

	formLogic();
	// !=== Form logic end ===!
	function counter() {
	window.addEventListener("load", function () {
		//Функция инициализации 
		function digitsCounterInit(digitsCountersInitItems) {
			let digitsCounters = digitsCountersInitItems ? digitsCountersInitItems : document.querySelectorAll("[data-digits-counter]");
			if (digitsCounters && digitsCounters.length) {
				digitsCounters.forEach(digitsCounter => {
					digitsCountersAnimate(digitsCounter);
				});
			}
		}
		function digitsCountersAnimate(digitsCounter) {
			let startTimestamp = null;
			const duration = parseInt(digitsCounter.dataset.digitsCounter) ? parseInt(digitsCounter.dataset.digitsCounter) : 1000;
			const startValue = parseInt(digitsCounter.innerHTML);
			const startPosition = 0;
			const step = (timestamp) => {
				if (!startTimestamp) {
					startTimestamp = timestamp;
				}
				const progress = Math.min((timestamp - startTimestamp) / duration, 1);
				digitsCounter.innerHTML = Math.floor(progress * (startPosition + startValue)) + ' +';
				if (progress < 1) {
					window.requestAnimationFrame(step);
				}
			};
			window.requestAnimationFrame(step);
		}
		// Пуск при загрузке страницы 
		// digitsCounterInit()
		let options = {
			threshold: 0.5
		}

		let observer = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					const targetElement = entry.target;
					const digitsCountersItems = targetElement.querySelectorAll("[data-digits-counter]")
					if (digitsCountersItems.length) {
						digitsCounterInit(digitsCountersItems)
					}
					// Выключить отслеживание после срабатывания
					observer.unobserve(targetElement)
				}
			});
		}, options);

		let sections = document.querySelectorAll('.counter-section');
		if (sections.length) {
			sections.forEach(section => {
				observer.observe(section);
			});
		}
	});
}

counter()
</script>
<script>
	// Read more button start
	$('button[id="readmore"]').on('click', function(e){
		e.preventDefault();
		$(this).parent('.feed__desc').toggleClass("active");
		$(this).toggleClass('active')
	})
	// Read more button end
	// Popup start
	$(function () {
		$('.popup-open').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			preloader: false,
			focus: '#username',
			closeOnBgClick: true,
			enableEscapeKey: true
		});
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
	});
	// Popup end

   $(function(){
		// Slider start
		$('.feed__slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 500,
			// autoplay: true,
			// autoplaySpeed: 4000,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<svg class="slider__button left" width="29" height="97" viewBox="0 0 29 97" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.891 2.11788C28.6011 3.47436 29 5.3139 29 7.23197C29 9.15004 28.6011 10.9896 27.891 12.3461L9.14245 48.152L27.891 83.9579C28.581 85.3222 28.9628 87.1494 28.9541 89.046C28.9455 90.9426 28.5472 92.7568 27.8449 94.098C27.1427 95.4391 26.1927 96.1999 25.1996 96.2164C24.2065 96.2328 23.2497 95.5037 22.5354 94.1861L1.10896 53.2661C0.398891 51.9096 0 50.0701 0 48.152C0 46.2339 0.398891 44.3944 1.10896 43.0379L22.5354 2.11788C23.2457 0.761801 24.2089 0 25.2132 0C26.2175 0 27.1808 0.761801 27.891 2.11788Z" fill="#FF0D71" /></svg>',
			nextArrow: '<svg class="slider__button right" width="29" height="98" viewBox="0 0 29 98" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.10896 94.9607C0.398893 93.6043 0 91.7647 0 89.8466C0 87.9286 0.398893 86.089 1.10896 84.7325L19.8576 48.9266L1.10896 13.1207C0.419016 11.7565 0.0372462 9.92924 0.0458759 8.03265C0.0545056 6.13604 0.452844 4.32178 1.15509 2.98063C1.85735 1.63947 2.80732 0.878738 3.80042 0.862259C4.79351 0.845779 5.75027 1.57487 6.46462 2.89252L27.891 43.8125C28.6011 45.169 29 47.0086 29 48.9266C29 50.8447 28.6011 52.6842 27.891 54.0407L6.46462 94.9607C5.75434 96.3168 4.79112 97.0786 3.78679 97.0786C2.78245 97.0786 1.81924 96.3168 1.10896 94.9607Z" fill="#FF0D71" /> </svg>',
			responsive: [
				{
				breakpoint: 1025,
				settings: {
					slidesToShow: 1,
				}
				}
			]
		})
		// Slider end

		// Animation counter start
		var a = 0;
		$(window).scroll(function() {

		var oTop = $('#numbers').offset().top - window.innerHeight;
		if (a == 0 && $(window).scrollTop() > oTop) {
			$('.num__count span').each(function() {
			var $this = $(this),
				countTo = $this.attr('data-count');
			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
				},

				{

				duration: 3000,
				easing: 'swing',
				step: function() {
					$this.text(Math.floor(this.countNum));
				},
				complete: function() {
					$this.text(this.countNum);
					//alert('finished');
				}

				});
			});
			a = 1;
		}

		});
		// Animation counter end

		// Popup start
		$(function () {
			$('.popup-modal').magnificPopup({
				type: 'inline',
				preloader: false,
				focus: '#username',
				closeOnBgClick: true,
				enableEscapeKey: true
			});
			$(document).on('click', '.popup-modal-dismiss', function (e) {
				e.preventDefault();
				$.magnificPopup.close();
			});
		});
		// Popup end
		
		// Slowly scroll start
		var $page = $('html, body');
		let scrollElements = [
			{ selector: 'a[href*="#start"]', offsetCoeficient: 60 },
			{ selector: 'a.scroll', offsetCoeficient: 60 },
			{ selector: 'a[href*="#intership"]', offsetCoeficient: 150 }
		]

		scrollElements.forEach(scrollElement => {
			$(scrollElement.selector).click(function() {
				$page.animate({
					scrollTop: $($.attr(this, 'href')).offset().top - scrollElement.offsetCoeficient
				})
			})
		})
		// Slowly scroll end

		// Question logic start
		
		$('.ques__subtitle').on('click', function(e){
			e.preventDefault();
			$(this).toggleClass('active')
		})
		// Question logic end
	});
</script>

<script>
	let currentLink = window.location.search;

	 let referal = [
		{ href: "?=tt", value: "tt" },
		{ href: "?=insta", value: "insta" },
		{ href: "?=instr", value: "instr" },
		{ href: "?=fb", value: "fb" },
		{ href: "?=fbua", value: "fbua" },
		{ href: "?=li", value: "li" },
		{ href: "?=wh", value: "wh" },
		{ href: "?=ua", value: "ua" },
		{ href: "?=tr", value: "tr" },
		{ href: "?=nepal", value: "nepal" },
		{ href: "?=east", value: "east" },
		{ href: "?=pakistan", value: "pakistan" },
		{ href: "?=sa", value: "sa" },
		{ href: "?=emine", value: "emine" },
		{ href: "?=adds", value: "adds" },
		{ href: "?=events", value: "events" },
	];

	let searchReferal = referal.find(data => data.href === currentLink);

	try {
		$('.referal--code').attr('value', searchReferal.value)
	} catch (err){
		// Referal is not found
	}
</script>


<?php get_footer(); ?>