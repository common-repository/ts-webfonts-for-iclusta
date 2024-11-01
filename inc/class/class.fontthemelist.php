<?php

class TypeSquare_ST_Fontthemelist {
  private static $instance;

	private function __construct(){}

  public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

  public function get_fonttheme_list()
    {
      return array(
        "basic" => [
          "name" => "ベーシック",
          "fonts" => [
            "title" => "新ゴ M",
            "lead" => "リュウミン M-KL",
            "content" => "新ゴ R",
            "bold" => "新ゴ B"
          ]
        ],
        "business" => [
          "name" => "ビジネス",
          "fonts" => [
            "title" => "UD新ゴNT M",
            "lead" => "リュウミン M-KL",
            "content" => "UD新ゴ R",
            "bold" => "UD新ゴNT B"
          ]
        ],
        "pop" => [
          "name" => "ポップ",
          "fonts" => [
            "title" => "じゅん 501",
            "lead" => "カクミン R",
            "content" => "新丸ゴ R",
            "bold" => "じゅん 501"
          ]
        ],
        "retro" => [
          "name" => "レトロ",
          "fonts" => [
            "title" => "トーキング",
            "lead" => "ゴシックMB101 M",
            "content" => "トーキング",
            "bold" => "ゴシックMB101 B"
          ]
        ],
        "luxury" => [
          "name" => "ラグジュアリー",
          "fonts" => [
            "title" => "A1明朝",
            "lead" => "中ゴシックBBB",
            "content" => "A1明朝",
            "bold" => "リュウミン B-KL"
          ]
        ],
        "wafu" => [
          "name" => "和風",
          "fonts" => [
            "title" => "正楷書CB1",
            "lead" => "リュウミン M-KL",
            "content" => "リュウミン R-KL",
            "bold" => "リュウミン B-KL"
          ]
        ],
        "blog" => [
          "name" => "ブログ",
          "fonts" => [
            "title" => "G2サンセリフ-B",
            "lead" => "ナウ-GM",
            "content" => "ナウ-GM",
            "bold" => "G2サンセリフ-B"
          ]
        ],
        "smartphone" => [
          "name" => "スマホ",
          "fonts" => [
            "title" => "UD新ゴ M",
            "lead" => "じゅん 201",
            "content" => "UD新ゴ コンデンス90 L",
            "bold" => "UD新ゴ コンデンス90 M"
          ]
        ],
        "casual" => [
          "name" => "カジュアル",
          "fonts" => [
            "title" => "ゴシックMB101 M",
            "lead" => "丸フォーク M",
            "content" => "ヒラギノ角ゴ W3 JIS2004",
            "bold" => "ヒラギノ角ゴ W6 JIS2004"
          ]
        ],
        "news" => [
          "name" => "ニュース",
          "fonts" => [
            "title" => "TBUDゴシック E",
            "lead" => "リュウミン B-KL",
            "content" => "TBUDゴシック R",
            "bold" => "TBUDゴシック E"
          ]
        ],
        "fashion" => [
          "name" => "ファッション",
          "fonts" => [
            "title" => "フォーク M",
            "lead" => "フォーク R",
            "content" => "中ゴシックBBB",
            "bold" => "見出ゴMB31"
          ]
        ]
      );
    }

  public function get_url()
    {
      return array(
        "file_domain" => "",
        "font_css" => "",
	      "font_json" => ""
      );
    }
}