<?php
//Copyright (c) 2016 iFeiwu.com
 class Stats extends Item { function __construct() { $this->table = "\163\164\x61\x74\x73"; parent::__construct(); } protected function getDays() { goto rwk7s; E1e8Q: r21Cq: goto xGbNK; aBaBF: $day = $days - $i; goto JMOyz; FJ8rW: return $this->success($data); goto p_keQ; JMOyz: $data["\x64\x61\171\x73"][$i . "\xe6\227\xa5"] = array("\165\x76" => $this->_getDaysCount($table, $day, "\143\157\157\153\151\145"), "\160\166" => $this->_getDaysCount($table, $day, "\151\x64"), "\x69\x70" => $this->_getDaysCount($table, $day, "\151\x70")); goto m79un; JuKnw: slyIH: goto Q2cVw; cpAwU: $i = 1; goto a4xzn; iHHWI: $table = $this->prefix . $this->table; goto wXwZI; Q_Ww7: if (!($i <= 1)) { goto slyIH; } goto zSHBF; lOYhh: xUUKl: goto JICfe; fOxVp: $i = 0; goto Y1oUv; rwk7s: $data = array("\x79\x65\x61\x72\163" => array(), "\x6d\x6f\156\164\150\x73" => array(), "\144\x61\171\163" => array()); goto iHHWI; xGbNK: $month = date("\155"); goto fOxVp; m79un: po3zK: goto cpj9K; cpj9K: $i++; goto nXOog; JICfe: $i++; goto X5kZG; nXOog: goto i9zE3; goto E1e8Q; X5kZG: goto bFOkZ; goto JuKnw; zSHBF: $month = $month - $i; goto VrTeA; wXwZI: $days = date("\x6a"); goto cpAwU; Y1oUv: bFOkZ: goto Q_Ww7; a4xzn: i9zE3: goto seze0; VrTeA: $data["\155\x6f\x6e\164\150\x73"][] = array("\x6d\x6f\x6e\x74\x68" => $month, "\165\x76" => $this->_getMonthsCount($table, $i, "\x63\x6f\x6f\x6b\151\x65"), "\x70\x76" => $this->_getMonthsCount($table, $i, "\151\x64"), "\x69\160" => $this->_getMonthsCount($table, $i, "\x69\160")); goto lOYhh; Q2cVw: $data["\171\145\141\162\163"][] = array("\x79\x65\x61\x72" => date("\x59"), "\165\166" => $this->_getYearsCount($table, 0, "\x63\x6f\x6f\x6b\x69\145"), "\x70\x76" => $this->_getYearsCount($table, 0, "\x69\x64"), "\151\x70" => $this->_getYearsCount($table, 0, "\151\x70")); goto FJ8rW; seze0: if (!($i <= $days)) { goto r21Cq; } goto aBaBF; p_keQ: } private function _getDaysCount($table, $day, $group) { goto Y5ABi; vmZr3: QnWZe: goto ampQ8; CM5mk: goto QnWZe; goto KjwDH; Y5ABi: if ($group != "\151\x64") { goto HXbMj; } goto d2vBa; UShon: return $this->db->query("\123\x45\114\105\103\124\x20\103\x4f\125\116\x54\x28\x74\56\156\165\155\51\40\106\122\x4f\115\40\50\x53\x45\114\105\x43\124\x20\x43\117\x55\x4e\124\50\52\x29\x20\156\165\155\40\x46\x52\117\x4d\x20{$table}\x20\x57\110\x45\122\105\40\144\x61\164\145\137\146\x6f\162\155\141\164\50\144\x61\164\x65\x2c\x27\x25\131\55\x25\x6d\x2d\x25\144\47\x29\x20\x3d\40\x64\141\x74\x65\x5f\146\x6f\162\x6d\x61\164\x28\x53\x55\102\104\x41\124\x45\x28\x6e\157\167\x28\x29\54\x69\156\164\145\162\x76\x61\154\40{$day}\40\144\141\x79\51\54\47\x25\131\x2d\45\155\55\45\144\47\x29\40\107\x52\x4f\125\x50\40\102\131\40\x60{$group}\x60\51\x20\164")->get(0); goto vmZr3; d2vBa: return $this->db->query("\123\x45\114\105\x43\x54\x20\103\117\x55\116\124\50\x2a\51\x20\156\x75\x6d\x20\106\122\117\x4d\x20{$table}\40\127\x48\105\122\105\x20\144\141\164\145\x5f\x66\157\162\x6d\141\164\x28\144\141\x74\145\54\47\x25\131\x2d\x25\x6d\55\x25\144\47\x29\40\75\x20\144\x61\164\145\137\146\x6f\162\x6d\141\164\50\123\125\x42\x44\x41\124\105\x28\x6e\157\167\x28\x29\54\151\x6e\x74\145\162\x76\141\x6c\40{$day}\40\x64\x61\x79\51\54\x27\x25\131\55\45\x6d\55\x25\144\x27\x29")->get(0); goto CM5mk; KjwDH: HXbMj: goto UShon; ampQ8: } private function _getMonthsCount($table, $month, $group) { goto s7S3R; OnQcw: return $this->db->query("\123\105\x4c\x45\103\124\x20\103\x4f\x55\x4e\124\x28\x74\x2e\x6e\165\155\x29\x20\x46\x52\x4f\115\40\x28\x53\x45\x4c\105\x43\x54\40\103\x4f\125\x4e\x54\x28\52\x29\x20\x6e\165\x6d\x20\x46\122\117\115\40{$table}\x20\x57\110\x45\122\x45\x20\144\x61\x74\145\x5f\x66\157\162\155\x61\164\x28\144\141\x74\145\54\x27\x25\x59\x2d\45\x6d\x27\51\40\x3d\x20\x64\141\x74\145\137\146\x6f\x72\155\x61\164\50\123\x55\x42\x44\101\x54\x45\50\x6e\157\x77\50\x29\54\x69\156\x74\145\162\166\x61\x6c\40{$month}\40\155\x6f\x6e\164\150\x29\54\x27\x25\131\55\45\x6d\47\x29\40\x47\122\x4f\x55\x50\40\102\131\x20\140{$group}\x60\51\x20\164")->get(0); goto zHM0X; f3Xeo: goto Au5s2; goto zLQh0; s7S3R: if ($group != "\x69\x64") { goto GSkVl; } goto TSsoR; zHM0X: Au5s2: goto eK80s; zLQh0: GSkVl: goto OnQcw; TSsoR: return $this->db->query("\x53\x45\x4c\x45\x43\x54\40\x43\117\125\116\x54\50\x2a\51\40\156\x75\x6d\x20\106\x52\x4f\x4d\x20{$table}\x20\127\x48\105\122\x45\40\144\141\164\145\x5f\x66\157\x72\155\x61\x74\50\x64\x61\164\145\54\47\x25\131\x2d\45\x6d\x27\x29\40\75\40\144\x61\x74\x65\137\146\157\162\155\x61\164\50\x53\x55\x42\x44\101\x54\105\x28\156\x6f\167\50\x29\x2c\151\x6e\x74\145\x72\166\x61\x6c\x20{$month}\x20\155\x6f\x6e\x74\150\51\54\x27\45\131\x2d\x25\155\x27\51")->get(0); goto f3Xeo; eK80s: } private function _getYearsCount($table, $year, $group) { goto CnJgh; DVaMj: goto u6d9G; goto W0YY5; kQRJL: return $this->db->query("\x53\x45\x4c\x45\103\x54\40\103\x4f\125\116\x54\50\x74\x2e\156\165\x6d\51\40\106\122\117\115\x20\50\x53\x45\x4c\105\x43\x54\40\103\117\125\116\124\50\x2a\51\40\x6e\x75\155\x20\106\122\117\115\40{$table}\x20\127\110\105\122\105\40\x64\x61\x74\145\137\146\x6f\162\x6d\141\x74\50\x64\141\x74\145\54\x27\45\x59\x27\51\x20\75\x20\x64\141\x74\x65\137\x66\157\162\x6d\141\x74\x28\123\x55\x42\x44\101\x54\x45\50\x6e\x6f\x77\x28\x29\x2c\x69\156\x74\x65\162\x76\141\x6c\x20{$year}\40\x79\x65\x61\162\x29\54\47\x25\x59\x27\x29\40\x47\x52\x4f\125\120\x20\102\131\x20\x60{$group}\x60\x29\40\164")->get(0); goto ChiPS; Jdkkv: return $this->db->query("\123\x45\x4c\105\103\x54\40\x43\x4f\125\116\x54\50\52\51\x20\x6e\165\x6d\40\106\122\117\115\40{$table}\40\x57\110\105\122\x45\x20\144\141\x74\x65\137\x66\157\x72\x6d\x61\x74\50\x64\x61\164\x65\x2c\x27\x25\x59\x27\x29\40\x3d\x20\144\141\164\x65\x5f\x66\x6f\x72\155\141\x74\50\x53\x55\102\104\x41\124\105\x28\x6e\157\x77\50\x29\54\151\156\164\x65\162\x76\x61\x6c\40{$year}\40\171\145\x61\x72\x29\x2c\x27\x25\131\47\x29")->get(0); goto DVaMj; CnJgh: if ($group != "\x69\144") { goto Byt1X; } goto Jdkkv; ChiPS: u6d9G: goto KEsER; W0YY5: Byt1X: goto kQRJL; KEsER: } }