<?php
//Copyright (c) 2016 iFeiwu.com
 class Trash extends Item { function __construct() { $this->table = "\164\162\141\163\150"; parent::__construct(); } protected function postDelete($request_data) { goto IBI9n; mX4eF: return $this->error(); goto z_GGR; IBI9n: $error = array(); goto CczPp; YWki6: $this->_log("\144\145\x6c\145\x74\145", array("\x74\x69\164\154\145" => count($ids))); goto Vo5xu; ifesG: foreach ($ids as $id) { goto lAkfp; tbkFs: goto adsos; goto XwbXm; XwbXm: DU7rb: goto nQCf3; YdlER: if ($this->db->delete($this->table, array("\x69\x64", "\x3d", $id))->is()) { goto DU7rb; } goto p2m8R; p2m8R: $error[] = $trash["\164\x69\164\154\x65"]; goto tbkFs; AWxjp: adsos: goto vFTNK; vFTNK: xUAfq: goto krtZE; Mmw03: jo4Ap: goto AWxjp; ynCNv: $path = $trash["\160\x61\164\x68"]; goto YdlER; nQCf3: if (!($path && count(explode("\57", $path)) >= 2)) { goto jo4Ap; } goto Kw7Fn; lAkfp: $trash = $this->db->select($this->table)->where(array("\151\x64", "\x3d", $id))->get(); goto ynCNv; Kw7Fn: $this->_rmdir("\x2e\x2e\x2f" . $path); goto Mmw03; krtZE: } goto hs7HP; ZRzoE: $this->db->beginTransaction(); goto ifesG; z_GGR: goto kLH6m; goto vXZ1c; hs7HP: RBumP: goto jSTiz; vXZ1c: SEs2p: goto GTsQb; ATkWI: kLH6m: goto MJRfF; jSTiz: if (count($error) === 0) { goto SEs2p; } goto XsQsL; CczPp: $ids = $request_data["\x69\x64"]; goto ZRzoE; XsQsL: $this->db->rollBack(); goto mX4eF; Vo5xu: return $this->success(); goto ATkWI; GTsQb: $this->db->commit(); goto YWki6; MJRfF: } protected function postReplay($request_data) { goto LEUP2; r9yWE: dKYwA: goto GMeJJ; JkeAs: $this->db->rollBack(); goto RRGPW; GMeJJ: $this->db->commit(); goto j7751; RRGPW: return $this->error(); goto EY0sU; xdIKB: if (count($error) === 0) { goto dKYwA; } goto JkeAs; PGjeN: dP4sL: goto lS_SV; LXibB: foreach ($ids as $id) { goto ogztM; ogztM: $trash = $this->db->select($this->table)->where(array("\151\x64", "\75", $id))->get(); goto bxlA7; o2SAD: $error[] = $trash["\x74\x69\164\x6c\x65"]; goto NPWQQ; mnkBb: goto hISG7; goto p0MPS; sUjqK: mFSzv: goto i2dYT; NPWQQ: hISG7: goto sUjqK; ePtBi: if ($isadd === false) { goto bbFl7; } goto iZnef; iZnef: $this->db->delete($this->table, array("\x69\x64", "\75", $id)); goto mnkBb; bxlA7: $table = $trash["\164\x61\142\154\x65"]; goto BpaRH; p0MPS: bbFl7: goto o2SAD; BpaRH: $isadd = $this->db->insert($table, json_decode($trash["\x64\141\164\x61"], true)); goto ePtBi; i2dYT: } goto F0xXI; TQkqz: $this->db->beginTransaction(); goto LXibB; jgmSv: return $this->success(); goto PGjeN; F0xXI: x6mRW: goto xdIKB; LEUP2: $error = array(); goto FAa2Z; FAa2Z: $ids = $request_data["\151\144"]; goto TQkqz; j7751: $this->_log("\162\x65\160\x6c\171", array("\164\x69\164\154\x65" => count($ids))); goto jgmSv; EY0sU: goto dP4sL; goto r9yWE; lS_SV: } }
