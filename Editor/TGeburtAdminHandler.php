<?php
// DataTables PHP library
include("lib/DataTables.php");

// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;

$editor = Editor::inst($db, 'TGeburt', 'GeburtsID')
    ->fields(
        Field::inst('GeburtsID')
            ->setFormatter(Format::ifEmpty(null)),
        Field::inst('Geburtsdatum')
            ->setFormatter(Format::ifEmpty(null)),
        Field::inst('OrtIDForeign')
            ->setFormatter(Format::ifEmpty(null))
    )
    ->process($_POST)
    ->json();
