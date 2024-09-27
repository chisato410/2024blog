// セッションストレージからフラグを取得
const isFirstLoad = sessionStorage.getItem('isFirstLoad');

// ページの読み込みが完了したときに実行される関数
window.addEventListener('load', function () {
    // フラグが 'true' でない場合（初回アクセス時またはフラグが削除された場合）
    if (isFirstLoad !== 'true') {
        // ローディング画面を表示
        const loadingElement = document.querySelector('.loading');
        loadingElement.classList.add('active');

        // 2秒後にローディング画面を非表示にする
        setTimeout(function () {
            // ローディング画面を非表示にする
            loadingElement.classList.remove('active');
            // コンテンツ要素を表示
            const contentsElement = document.querySelector('.contents.hidden');
            console.log(contentsElement);
            contentsElement.classList.remove('hidden'); // hiddenクラスを取り除くことでコンテンツを表示
            // セッションストレージにフラグを保存
            sessionStorage.setItem('isFirstLoad', 'true');
        }, 2000);
        setTimeout(function () {
            loadingElement.style.display = 'none'; // 非表示にする
        }, 2500);
    } else {
        // 2回目以降のアクセス時の処理を記述
        // コンテンツ要素を表示
        const contentsElement = document.querySelector('.contents.hidden');
        contentsElement.classList.remove('hidden'); // hiddenクラスを取り除くことでコンテンツを表示
    }
});

jQuery(function () {
    jQuery(".openbtn").click(function () {//ボタンがクリックされたら
        jQuery("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        jQuery(".openbtn").toggleClass('active');//ナビゲーションにpanelactiveクラスを付与
    });

    jQuery("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
        jQuery("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
        jQuery(".openbtn").removeClass('active');//ナビゲーションのpanelactiveクラスも除去
    });

    //スクロールした際の動きを関数でまとめる
    function PageTopAnime() {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 200) {//上から200pxスクロールしたら
            jQuery('#page-top').removeClass('DownMove');//#page-topについているDownMoveというクラス名を除く
            jQuery('#page-top').addClass('UpMove');//#page-topについているUpMoveというクラス名を付与
        } else {
            if (jQuery('#page-top').hasClass('UpMove')) {//すでに#page-topにUpMoveというクラス名がついていたら
                jQuery('#page-top').removeClass('UpMove');//UpMoveというクラス名を除き
                jQuery('#page-top').addClass('DownMove');//DownMoveというクラス名を#page-topに付与
            }
        }
    }

    // 画面をスクロールをしたら動かしたい場合の記述
    jQuery(window).scroll(function () {
        PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
    });

    // ページが読み込まれたらすぐに動かしたい場合の記述
    jQuery(window).on('load', function () {
        PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
    });

    // #page-topをクリックした際の設定
    jQuery('#page-top a').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0//ページトップまでスクロール
        }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
        return false;//リンク自体の無効化
    });

    jQuery(".goodBtn").on("click", function () {
        jQuery(this).toggleClass("active");
    });

});