<?php

function removeBracket($string)
{
	$remove = array ( "{" => "", "}" => "");
	$result = strtr($string, $remove);
	return $result;
}

// Mandatory field
$MAN = TRUE;
// Optional field
$OPT = FALSE;

// All possible fields
$bibtexFields = array(
		"bibtexEntryType",
		"bibtexCitation",
		"author",
		"title",
		"journal",
		"year",
		"volume",
		"number",
		"pages",
		"month",
		"doi", 
		"note",
		"editor",
		"publisher",
		"affiliation",
		"references",
		"issn",
		"coden",
		"language",
		"institution",
		"series",
		"address",
		"edition",
		"howpublished",
		"chapter",
		"booktitle",
		"type",
		"organization",
		"school",
		"keywords",
		"url",
		"file",
		"confidential",
		"comments" );

$ArticleFields = array(
	array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("journal", $MAN),
	array("year", $MAN),
	array("volume", $OPT),
	array("number", $OPT),
	array("pages", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$BookFields = array(
    array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("editor", $OPT),
	array("publisher", $MAN),
	array("year", $MAN),
	array("volume", $OPT),
	array("number", $OPT),
	array("series", $OPT),
	array("address", $OPT),
	array("edition", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$BookletFields = array(
     array("bibtexCitation", $MAN),
	array("title", $MAN),
	array("author", $OPT),
	array("howpublished", $OPT),
	array("year", $OPT),
	array("address", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$InbookFields = array(
    array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("editor", $MAN),
	array("chapter", $MAN),
	array("pages", $MAN),
	array("publisher", $MAN),
	array("year", $MAN),
	array("volume", $OPT),
	array("number", $OPT),
	array("series", $OPT),
	array("type", $OPT),
	array("address", $OPT),
	array("edition", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$IncollectionFields = array(
    array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("booktitle", $MAN),
	array("publisher", $MAN),
	array("year", $MAN),
	array("volume", $OPT),
	array("number", $OPT),
	array("series", $OPT),
	array("type", $OPT),
	array("address", $OPT),
	array("edition", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$InproceedingsFields = array(
	array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("booktitle", $MAN),
	array("year", $MAN),
	array("editor", $OPT),
	array("volume", $OPT),
	array("number", $OPT),
	array("series", $OPT),
	array("pages", $OPT),
	array("address", $OPT),
	array("month", $OPT),
	array("organization", $OPT),
	array("publisher", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$ManualFields = array(
	array("bibtexCitation", $MAN),
	array("title", $MAN),
	array("author", $OPT),
	array("organization", $OPT),
	array("address", $OPT),
    array("edition", $OPT),
	array("month", $OPT),
	array("year", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$MastersthesisFields = array (
    array("bibtexCitation", $MAN),
	array("title", $MAN),
	array("author", $MAN),
    array("school", $MAN),
    array("year", $MAN),
    array("type", $OPT),
	array("address", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$MiscFields = array (
    array("bibtexCitation", $MAN),
	array("author", $OPT),
    array("title", $OPT),
	array("howpublished", $OPT),
	array("month", $OPT),
	array("year", $OPT),
    array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$ProceedingsFields = array (
    array("bibtexCitation", $MAN),
    array("title", $MAN),
    array("year", $MAN),
    array("editor", $OPT),
	array("volume", $OPT),
	array("number", $OPT),
	array("series", $OPT),
	array("address", $OPT),
	array("month", $OPT),
	array("organization", $OPT),
	array("publisher", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$TechreportFields = array (
	array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
    array("institution", $MAN),
    array("year", $MAN),
    array("type", $OPT),
    array("number", $OPT),
	array("address", $OPT),
	array("month", $OPT),
	array("note", $OPT),
	array("url", $OPT),
	array("keywords", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

$UnpublishedFields = array (
    array("bibtexCitation", $MAN),
	array("author", $MAN),
	array("title", $MAN),
	array("note", $MAN),
	array("month", $OPT),
	array("year", $OPT),
	array("keywords", $OPT),
	array("url", $OPT),
	array("file", $OPT),
	array("confidential", $OPT),
	array("comments", $OPT)
	);

// All bibtex citation types
$bibtexTypes = array(
	'article' => array("article", $ArticleFields),
	'book' => array("book", $BookFields),
	'booklet' => array("booklet", $BookletFields),
	'conference' => array("conference", $InproceedingsFields),
	'inbook' => array("inbook", $InbookFields),
	'incollection' => array("incollection", $IncollectionFields),
	'inproceedings' => array("inproceedings", $InproceedingsFields),
	'manual' => array("manual", $ManualFields),
	'mastersthesis' => array("mastersthesis", $MastersthesisFields),
	'misc' => array("misc", $MiscFields),
	'phdthesis' => array("phdthesis", $MastersthesisFields),
	'proceedings' => array("proceedings", $ProceedingsFields),
	'techreport' => array("techreport", $TechreportFields),
	'unpublished' => array("unpublished", $UnpublishedFields)
	);



?>