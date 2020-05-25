<?php

get_header();

$cf7s = array(
	'event' => array(
		'id' => 173,
		'tab' => 'イベント誘致',
		'headline' => 'イベントにおける飲食提供全般のお問い合わせ'
	),
	'lunch' => array(
		'id' => 175,
		'tab' => 'ネオ屋台村誘致',
		'headline' => '空スペースへのネオ屋台村誘致のお問い合わせ'
	),
	'promotion' => array(
		'id' => 176,
		'tab' => 'プロモーション',
		'headline' => '移動販売車やネオ屋台村を利用したプロモーションのお問い合わせ',
		'description' => 'ひとで賑わうネオ屋台村。オフィス街でのプロモーション展開ではOL、ビジネスマン、とターゲットを絞ったプロモーションが可能です。<br>また、当社では屋外での食品提供が可能なインフラが整っているので、ネオ屋台村のスペースに限らず、様々な場所でのサンプリング実施も各方面で好評いただいています。<br>より効果的なプロモーションのお手伝いをおまかせください！'
	),
	'join' => array(
		'id' => 174,
		'tab' => 'ネオ屋台村登録希望',
		'headline' => 'ネオ屋台村への出店希望のお問い合わせ',
		'description' => 'ネオ屋台村ご登録・ご出店に関しては、弊社にて開催の説明会にお越しいただき、詳細をご案内しております。<br>
説明会ご参加を希望の方は以下の必要事項をお送りください。内容を確認後、直近の説明会日程をご案内いたします。'
	),
	'car' => array(
		'id' => 178,
		'tab' => '移動販売車のご相談',
		'headline' => 'メンテナンス・カスタマイズ・購入・売却・レンタルなど、移動販売車についてのお問い合わせ'
	),
	'ponte' => array(
		'id' => 179,
		'tab' => '飲食店舗展開',
		'headline' => 'フードコートなど飲食店展開のお問い合わせ'
	),
	'media' => array(
		'id' => 177,
		'tab' => '撮影・取材協力',
		'headline' => '移動販売車での撮影協力依頼、弊社事業の取材などのお問い合わせ'
	),
	'other' => array(
		'id' => 171,
		'tab' => 'その他',
		'headline' => 'ご意見・ご要望・ご質問など、その他のお問い合わせ'
	)
);

?>

<div id="contents">

    <section id="mv">
        <h2 class="mv_ttl">
            <span>お問い合わせ</span>
            <span>Contact</span>
        </h2>
        <div class="mv_img">
            <ul class="bxslider bg_img">
                <li><img src="<?= WSTD_ASSETS_URI ?>/other/img/other_terms_mv_img01.jpg" alt=""></li>
            </ul>
        </div>
    </section>

    <section id="content">
		<article <?php post_class( 'cnt_block w100per' ); ?>>

			<div class="alert alert-info fade in">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				下記の<?php echo count( $cf7s ); ?>項目の中から、お問い合わせの内容を選択してください。
			</div>
			<ul class="nav nav-tabs" id="wstd-contacts">
				<?php
				foreach ( $cf7s as $key => $arg ) {
					printf( '<li><a href="#%s" class="%s">%s</a></li>', $key, $key, $arg['tab'] );
					echo "\n";
				} ?>
			</ul>
			<div class="tab-content">
				<?php
				foreach ( $cf7s as $key => $arg ) { ?>
				<div class="tab-pane" id="<?php echo $key; ?>">
					<h3 class="cnt_ttl"><?php echo $arg['headline']; ?></h3><?php
						if ( isset( $arg['description'] ) && !empty( $arg['description'] ) ) { ?>
					<p class="ta_center ta_left_sp"><?php echo $arg['description']; ?></p>
					<?php
					}
					echo do_shortcode( '[contact-form-7 id="' . $arg['id'] . '"]' ); ?>
				</div><?php
				} ?>
			</div>

		</article>
	</section>

</div><!-- /#contents -->

<?php
add_action( 'wp_footer', function() { ?>
<script>
	var active = location.hash ? '#wstd-contacts a[href="' + location.hash + '"]' : '';
	location.hash = '';
	if (active)
	  $(active).tab('show');

	var alrt = $('.alert');

	$('#wstd-contacts a').click(function(e) {
	  e.preventDefault();
	  $(this).tab('show');
	  alrt.alert('close');
	});
</script>
<?php
}, 99 );

get_footer();
