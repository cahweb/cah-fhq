<?php
function latestpodCast($url){
	
				//$url = "https://fhqpodcast.cah.ucf.edu/index.xml";
				$outHTML = "";
				$url = shortcode_atts($url);
 				$url = $url['url'];
 				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
				curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");     
				$response = curl_exec($ch);
				curl_close($ch);
				$xmlObject = simplexml_load_string($response);

				$outHTML = "<p>Listen to the latest episode: ";
				$outHTML .= "<a href=\"{$xmlObject[0]->channel->item->enclosure['url']}\">" . $xmlObject[0]->channel->item->title . "</a><br>";
				$outHTML .= "<small>". $xmlObject[0]->channel->item->description . "</small></p>";
				
				return $outHTML;
				
}

add_shortcode( 'lpodCast', 'latestpodCast' );