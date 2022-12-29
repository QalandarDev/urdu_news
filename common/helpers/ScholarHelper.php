<?php

namespace common\helpers;

use voku\helper\HtmlDomParser;
use Yii;
use yii\bootstrap4\Html;

class ScholarHelper
{
    public static function getPublications(string $scholar = null): string|null
    {
        if (strlen($scholar) > 5) {
            $dom = HtmlDomParser::file_get_html("https://scholar.google.com/citations?user={$scholar}&hl=ru&oi=ao&pagesize=100&sortby=pubdate");
            $publications = [];
            foreach ($dom->findMulti('.gsc_a_tr') as $item) {
                $pub['name'] = $item->find('.gsc_a_at', 0)->plaintext;
                $pub['authors'] = $item->find('.gs_gray', 0)->plaintext;
                $pub['year'] = $item->find('.gsc_a_h', 0)->plaintext;
                $pub['journal'] = str_replace($pub['year'], '', $item->find('.gs_gray', 1)->plaintext);
                $pub['link'] = "https://scholar.google.com" . htmlspecialchars_decode($item->find('.gsc_a_at', 0)->href);
                $publications[] = $pub;
            }
            $return = "";
            foreach ($publications as $publication) {
                $return .= "<tr><td>" . Html::a($publication['name'], $publication['link'])
                    . "<br><div class=\"text-muted\">" . $publication['authors'] . "</div>"
                    . " <br<div class=\"text-muted\">" . $publication['journal'] . "</td>"
                    . "<td style='vertical-align: middle'>" . $publication['year'] . "</td></tr>";
            }
            return $return;
        }
        return Yii::t('news', 'No publications');
    }
}