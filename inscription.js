function openWindow(){
    width = 500;
    height = 500;
    if (window.innerWidth) {
        var left = (window.innerWidth - width) / 2;
        var top = (window.innerHeight - height) / 2;
    }
    else {
        var left = (document.body.clientWidth - width) / 2;
        var top = (document.body.clientHeight - height) / 2;
    }
    window.open('deuxiemepageinscription.php', 'nom_de_ma_popup', 'menubar=no, scrollbars=no, top=' + top + ', left=' + left + ', width=' + width + ', height=' + height + '');
}