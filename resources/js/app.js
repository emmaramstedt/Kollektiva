require('./bootstrap');

if (!window.location.href.includes('/hyrut')) {
    document.querySelector('header').style.display = "block";
    document.querySelector('.footerWrapper').style.display = "block";

}
else{
    document.querySelector('header').style.display = "none";
    document.querySelector('.footerWrapper').style.display = "none";
}
