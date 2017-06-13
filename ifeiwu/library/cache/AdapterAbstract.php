<?php
namespace ifeiwu\cache; abstract class AdapterAbstract implements AdapterInterface { protected function _key($key) { return $this->option['prefix'] . '_' . $key; } } 