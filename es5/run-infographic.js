(function ($) {

	/* --------------------------------------------------
  数字のカウント
	https://tech.brick-plan.jp/wp-content/themes/cocoon-child-master/demo/fade04/index.html
	https://tech.brick-plan.jp/fade/fade-pattern09/
	-------------------------------------------------- */
	$('.js-start-counter').on('inview', function(event, isInView) {
		if (isInView) {

			$(this).each(function() {
				if($(".counter",this).attr("data-num").indexOf('.') > -1 ){
					var rounding = 1;
				} else {
					var rounding = 0;
				}
				$(".counter",this).numerator({
					easing: 'swing',
					duration: 1000, //カウントアップの時間
					toValue: $(".counter",this).attr("data-num"), //カウントアップする数値
					//delimiter: ',', //3桁区切りの記号
					rounding: rounding //小数点以下の桁数（初期値：0）
				});
			});

		}
	});


/* --------------------------------------------------
  数字のカウント
	https://codepen.io/ugokuweb/pen/rNMrVEO
	https://github.com/LadyBiosphere/animated-counter
-------------------------------------------------- */
	// $('.js-start-counter').on('inview', function(event, isInView) {
	// 	if (isInView) {
	// 		//要素が見えたときに実行する処理
	// 		$(this).find('.counter').each(function(){
	// 			$(this).prop('Counter',0).animate({//0からカウントアップ
	// 				Counter: $(this).text()
	// 			}, {
	// 				// スピードやアニメーションの設定
	// 				duration: 2000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
	// 				easing: 'swing',//動きの種類。他にもlinearなど設定可能
	// 				step: function (now) {
	// 					$(this).text(Math.ceil(now));
	// 				}
	// 			});
	// 		});
	// 	}
	// });


/* --------------------------------------------------
  円グラフ
	https://coco-factory.jp/ugokuweb/move01/9-5-6/
	Chart.js（https://www.chartjs.org/）
	https://www.tohoho-web.com/ex/chartjs-params.html#doughnutAndPieStyles
-------------------------------------------------- */
//値をグラフに表示させる
Chart.plugins.register({
	afterDatasetsDraw: function (chart, easing) {
		const ctx = chart.ctx;
		chart.data.datasets.forEach(function (dataset, i) {

			const meta = chart.getDatasetMeta(i);

			if (!meta.hidden) {
				meta.data.forEach(function (element, index) {
					// 値の表示
					ctx.fillStyle = 'rgb(0, 0, 0, 0)';//文字の色
					const fontSize = 22;//フォントサイズ
					const fontStyle = 'normal';//フォントスタイル
					const fontFamily = 'Arial';//フォントファミリー
					ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

					const dataString = dataset.data[index].toString();

					// 値の位置
					ctx.textAlign = 'center';//テキストを中央寄せ
					ctx.textBaseline = 'middle';//テキストベースラインの位置を中央揃え

					const padding = 5;//余白
					const position = element.tooltipPosition();
					ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
				});
			}
		});
	}
});

	//=========== 円グラフ ============//

	//画面上に入ったら円グラフを描画
	//▼売上比率
	$('.js-data-circle-uriagehiritsu').on('inview', function (event, isInView) {
		if (isInView) {
			const ctx = $("#data-circle-uriagehiritsu");//グラフを描画したい場所のid
			const chart = new Chart( ctx,{
				type: 'pie',//グラフのタイプ
				data:{//グラフのデータ
					labels:["海外","国内",], //データの名前
					datasets:[{
						label:"グラフのタイトル",//グラフのタイトル
						backgroundColor:["#ba1e30", "#E6E6E6"],//グラフの背景色
						data:["80","20",] //データ
					}]
				},
				options: {//グラフのオプション
					responsive: true,
					maintainAspectRatio: false,//サイズ変更の際に、元のキャンバスのアスペクト比(width / height)を維持
					legend:{
						display: false //グラフの説明を表示
					},
					tooltips: false, //グラフへカーソルを合わせた際の詳細（ツールチップ）表示の設定
					title: false, //上部タイトル表示の設定
				}
			});
		}
	});

	//画面上に入ったら円グラフを描画
	//▼有給休暇取得率
	$('.js-data-circle-yukyusyutokuritsu').on('inview', function (event, isInView) {
		if (isInView) {
			const ctx = $("#data-circle-yukyusyutokuritsu");//グラフを描画したい場所のid
			const chart = new Chart( ctx,{
				type: 'pie',//グラフのタイプ
				data:{//グラフのデータ
					labels:["未消化","消化",], //データの名前
					datasets:[{
						label:"グラフのタイトル",//グラフのタイトル
						backgroundColor:["#ba1e30", "#E6E6E6"],//グラフの背景色
						data:["80","20",] //データ
					}]
				},
				options: {//グラフのオプション
					responsive: true,
					maintainAspectRatio: false,//サイズ変更の際に、元のキャンバスのアスペクト比(width / height)を維持
					legend:{
						display: false //グラフの説明を表示
					},
					tooltips: false, //グラフへカーソルを合わせた際の詳細（ツールチップ）表示の設定
					title: false, //上部タイトル表示の設定
					// 描画が終わったらイベントを発火させる
					on: {
						draw: function() {
							// イベントを発火させる
							alert('sfdf');
						}
					}
				}
			});
		}
	});


	//=========== ドーナツグラフ ============//
	//画面上に入ったらドーナツグラフを描画
	$('.js-chart-doughnut-nenreikoseihi').on('inview', function(event, isInView) {
		if (isInView) {

			const ctx = $("#chart-doughnut-nenreikoseihi");//グラフを描画したい場所のid
			const chart = new Chart( ctx,{
				type:'doughnut',//グラフのタイプ
				data:{//グラフのデータ
				labels:["IT","営業","不動産","医療",],//データの名前
				datasets:[{
						// label:"職種別比率",//グラフのタイトル
						backgroundColor:["#ba1e30", "#E0E0E0", "#AAAAAA", "#2E2E2E"],//グラフの背景色
						data:["24","18","22","36",]//データ
					}]
				},
				options: {//グラフのオプション
					responsive: true,
					maintainAspectRatio: false,//サイズ変更の際に、元のキャンバスのアスペクト比(width / height)を維持
					cutoutPercentage: 65,//中央からの空円の太さ。グラフの太さ変更
					legend:{
						display: false//グラフの説明を表示
					},
					tooltips: false, //グラフへカーソルを合わせた際の詳細（ツールチップ）表示の設定
					title: false, //上部タイトル表示の設定
				}
			});

		}
	});


	/* --------------------------------------------------
		タテヨコ棒グラフ
		https://codepen.io/richardramsay/pen/ZKmQJv
	-------------------------------------------------- */
	//画面上に入ったらグラフを描画
	$('.js-start-bar_chart').on('inview', function(event, isInView) {
		if (isInView) {
			const cssStyle = $(this).data('type');
			const dataValue = $(this).find('.data-value, .color-gray1');
			$(this).find('.block').each(function() {
				const text = $(this).data('num');
				$(this).css(cssStyle, text + '%');
			});
			dataValue.addClass('is-active');
		}
	});


})(jQuery);