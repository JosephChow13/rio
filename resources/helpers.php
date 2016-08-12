<?php

use App\Api\FocusedImage;

function assetPath($file, $config = null) {
    $cdn = config("quintype.asset-host");
    return $cdn . elixir($file, config("quintype.publisher-name") . "/assets");
}

function focusedImageUrl($slug, $cdn, $aspectRatio, $metadata, $opts) {
    $image = new FocusedImage($slug, $metadata);
    return $cdn . "/" . $image->path($aspectRatio, $opts);
}

function shorthead($headline) {
    return substr($headline, 0, 100);
}

function shortsummary($summary) {
if (strlen($summary)>100){
$description=substr($summary, 0, 100)."...";
}
else 
$description= $summary;

     return $description;
}


function decode64($string) {
    return base64_decode($string);
}


function get_logo($key,$p) {

    $data = ' {"Atlantic":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/atlantic.png",
  "URL": "http://www.theatlantic.com",
  "Partnername": "Atlantic"
}],
"CIR":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/CIR-Logo.png",
  "URL": "",
"Partnername": ""}],
"CityLab":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/CityLab-Logo.png",
  "URL": "http://www.citylab.com",
"Partnername": "CityLab"}],
"ClimateDesk":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/ClimateDesk_logo.png",
  "URL": "http://climatedesk.org",
"Partnername": "Climate Desk"}],
"Fusion":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Fusion-Logo-Horiztonal.png",
  "URL": "http://fusion.net",
"Partnername": "Fusion"}],
"Grist":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Grist-Logo.png",
  "URL": "https://grist.org",
"Partnername": "Grist"}],
"Guardian":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Guardian-Logo.png",
  "URL": "https://www.theguardian.com",
"Partnername": "The Guardian"}],
"HuffPost":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/HuffPost-US-4xLogos.png",
  "URL": "http://www.huffingtonpost.in",
"Partnername": "The Huffington Post"}],
"Medium":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/medium.png",
  "URL": "https://medium.com",
"Partnername": "Medium"}],
"MotherJones":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/MotherJones-Logo-Horiztonal.png",
  "URL": "http://www.motherjones.com",
"Partnername": "Mother Jones"}],
"NewRepublic":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/NewRepublic-Logo.png",
  "URL": "https://newrepublic.com",
"Partnername": "New Republic"}],
"NewsWeek":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Newsweek-Logo.png",
  "URL": "http://www.newsweek.com",
"Partnername": "Newsweek"}],
"Reveal":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Reveal-Logo-1.png",
  "URL": "https://www.revealnews.org",
"Partnername": "Reveal from the Center for Investigative Reporting"}],
"Slate":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Slate-Logo.png",
  "URL": "http://www.slate.com",
"Partnername": "Slate"}],
"Wired":
  [{"Logo" : "https://s3.amazonaws.com/third-party-logos/Wired-Logo.png",
  "URL": "http://www.wired.com",
"Partnername": "Wired"}]
}';


    $s = json_decode($data, true);
//echo "<pre>";
//print_r($s);

    if ($key != "")
        echo $s["$key"][0]["$p"];
    else
        echo "";
}
