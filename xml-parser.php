<?php
if ($_POST['search']) {
  $search_var = $_POST['search'];
  // This function allows XML parsing and the use of external entities
  $xml = simplexml_load_string($search_var, 'SimpleXMLElement', LIBXML_NOENT);
  foreach ($xml as $value) {
    echo $value->asXML() . "<br>";
  }
}
?>
