<?php namespace App\Lib;

use App\Lib\Config\Config;

class Plugin extends Curl{
    private $curl;
    private $url;
    private $extracted = array();
    private $widgetStr;
    private $repoAmount;
    private $title;

    public function __construct($username, $num, $title) {
        $conf = new Config();
        $this->url = "https://api.github.com/users/" .$username . "/repos?client_id=" . ID . "&client_secret=" . SEC ."&sort=updated";
        $this->repoAmount = $num;
        $this->title = $title;
        $this->curl = new Curl();
    }

    public function getData($isArray) {
        $val = $this->curl->getCurlData($this->url);
        $i = 0;
        if($isArray) {
            if($val) {
                foreach($val as $item) {
                    $this->extracted[$i]["name"] = $item['name'];
                    $this->extracted[$i]["fullname"] = $item['full_name'];
                    $this->extracted[$i]["language"] = $item['language'];
                    $this->extracted[$i]["fork"] = $item['fork'];
                    $this->extracted[$i]["avatar_url"] = $item["owner"]["avatar_url"];
                    $this->extracted[$i++]["html_url"] = $item['html_url'];
                }

            }
            $this->buildWidgetString();
            $this->appendHTMLElement("ul");
            $this->prependOcticon();
            return $this->widgetStr;
        } else {
            return "";
        }
    }

    public function appendHTMLElement($elem = null) {
       $this->widgetStr =  "<" . $elem . " class='widget-list'><li class='repo-list-header' ><img class='avatar-img' style='width:50px;height:50px' src=" . $this->extracted[0]["avatar_url"] . "/>" ."<span class='list-title'>" . $this->title . "</span></li>" . $this->widgetStr;
        if($elem){
            $this->widgetStr .= "</" . $elem. ">";

        }

    }

    public function prependOcticon() {
        $this->widgetStr = "<link rel='stylesheet'  href=https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.css
            >" . $this->widgetStr;
    }
    public function buildWidgetString() {
        $this->widgetStr = "";
        $this->extracted = array_slice($this->extracted, 0, $this->repoAmount);
        if(!is_string($this->extracted)) {
            foreach($this->extracted as $key => $value) {
                $icon = $this->extracted[$key]["fork"] == true ? 'octicon octicon-repo-forked icon' : 'octicon octicon-repo icon';
                $this->widgetStr .= "<a target=__blank href=" . $this->extracted[$key]["html_url"] .
                    "><li><span class='" . $icon . "'></span>" . $this->extracted[$key]["name"]."" .
                    "<span class='language'>" .$this->extracted[$key]["language"] . "</span></li></a>";

            }
        }

    }


}