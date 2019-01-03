<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defmodel extends CI_Model {

	public function read()
	{
		$query = $this->db->get('dataset');
		return $query->result();
	}
	function getFUSEKI()
	{
		// PREFIX owl: <http://www.w3.org/2002/07/owl#>
		// PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		// PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		// PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		// PREFIX foaf: <http://xmlns.com/foaf/0.1/>
		// PREFIX dc: <http://purl.org/dc/elements/1.1/>
		// PREFIX : <http://dbpedia.org/resource/>
		// PREFIX dbpedia2: <http://dbpedia.org/property/>
		// PREFIX dbpedia: <http://dbpedia.org/>
		// PREFIX skos: <http://www.w3.org/2004/02/skos/core#>
		// PREFIX d: <http://dbpedia.org/ontology/>

		// SELECT DISTINCT * {
		// ?a  d:author  ?s.
		// ?s d:occupation ?lel.
		// ?lel rdfs:label ?ww.
		// ?a  d:publicationDate ?pub
		// FILTER (?pub > '2010-06-26'^^xsd:date).
		// FILTER contains(?ww,'Novelist') 
		// }
		// ORDER BY DESC(?pub)
		$format = 'json';
		$query =
		"
		

PREFIX dbpedia2: <http://dbpedia.org/property/>
		PREFIX d: <http://dbpedia.org/ontology/>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		SELECT DISTINCT ?ab ?label ?wikiid ?c WHERE {
		?ab  d:literaryGenre ?b.
		?ab d:thumbnail ?c.
		?ab d:abstract ?abs.
		?ab rdfs:label ?label.
		?ab d:literaryGenre ?genre.
		?ab dbpedia2:author ?auth.
		?ab d:wikiPageID ?wikiid.
		FILTER (lang(?label)='en')
		}

		";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;	
	}
	function genregetrdf($uri)
	{
		
		$format = 'json';
		$query =
		"

		PREFIX d: <http://dbpedia.org/ontology/>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX dbpedia2: <http://dbpedia.org/property/>

		SELECT DISTINCT ?wiki ?b WHERE {
		?ab  d:literaryGenre ?bc.
		?ab d:thumbnail ?c.
		?ab d:abstract ?abs.
		?ab rdfs:label ?label.
		?ab d:literaryGenre ?genre.
		?ab dbpedia2:author ?auth.
		?ab d:wikiPageID ?wikiid.
		?bc rdfs:label ?b.
		?bc d:wikiPageID ?wiki.
		FILTER (lang(?b)='en').
		FILTER REGEX(?b, '^".$uri."(.*)$', 'i')

		}

		
		";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;	
	}
	function genrerdf($genre)
	{
		
		$format = 'json';
		$query =
		"

		PREFIX d: <http://dbpedia.org/ontology/>

		SELECT DISTINCT ?ab as ?judul ?b WHERE {
		?ab  d:literaryGenre ?b.
		FILTER regex(?b, '".$genre."', 'i')

				}
		";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;	
	}
	function getpagerdf($wiki)
	{
		$format = 'json';
		$query =
		"
		PREFIX dbpedia2: <http://dbpedia.org/property/>
		PREFIX d: <http://dbpedia.org/ontology/>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>

		SELECT DISTINCT * WHERE {
        ?d  d:wikiPageID  ?wiki.
		?d rdfs:label ?label.
		?d d:thumbnail ?img.
		?d d:abstract ?ab.
		?d d:literaryGenre ?genre.
		?d dbpedia2:author ?auth.

		FILTER (?wiki = ".$wiki.")

				}
		LIMIT 10
		";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;	
	}
	function getUrlDbpediaAbstract($term)
	{
		$format = 'json';
		$query =
		"PREFIX dbp: <http://dbpedia.org/resource/>
		PREFIX dbo: <http://dbpedia.org/ontology/>

		SELECT ?abstract 
		WHERE {
			dbp:Westlife dbo:abstract ?abstract
			FILTER langMatches(lang(?abstract),'en')
		}";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;
	}

	function getUrlDbpediaDirector($term)
	{
		$format = 'json';
		$query =
		"PREFIX dbp: <http://dbpedia.org/resource/>
		PREFIX dbo: <http://dbpedia.org/ontology/>
		PREFIX foaf: <http://xmlns.com/foaf/0.1/>

		SELECT ?namadirector ?id
		WHERE {
			dbp:Tom_and_Jerry dbo:director ?director.
			?director foaf:name ?namadirector.
			?director dbo:wikiPageID ?id.
		}";

		$searchUrl = 'http://dbpedia.org/sparql?'
		.'query=' .urlencode($query)
		.'&format='.$format;

		return $searchUrl;
	}

	function request($url){
 
   	if (!function_exists('curl_init')){ 
      die('CURL is not installed!');
	   }
	 
	   // kendali curl
	   $ch= curl_init();
	 
	   // setel permintaan url
	   curl_setopt($ch, 
	      CURLOPT_URL, 
	      $url);
	 
	   // kembali respons, jangan print/echo
	   curl_setopt($ch, 
	      CURLOPT_RETURNTRANSFER, 
	      true);
	 
	   /*
	   Untuk menemukan lebih banyak opsi dari curl:
	   http://www.php.net/curl_setopt
	   */		
	 
	   $response = curl_exec($ch);
	 
	   curl_close($ch);
	 
	   return $response;
	}

	function printArray($array, $spaces = "")
	{
	   $retValue = "";
		
	   if(is_array($array))
	   {	
	      $spaces = $spaces
	         ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	      $retValue = $retValue."<br/>";
	      foreach(array_keys($array) as $key)
	      {
	         $retValue = $retValue.$spaces
	            ."<strong>".$key."</strong>"
	            .printArray($array[$key], 
	               $spaces);
	      }		
	      $spaces = substr($spaces, 0, -30);
	   }
	   else $retValue = 
	      $retValue." - ".$array."<br/>";
		
	   return $retValue;
	}

}
