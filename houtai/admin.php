<?php
//Copyright (c) 2016 iFeiwu.com
 class Admin extends Item { function __construct() { $this->table = "\141\x64\x6d\x69\x6e"; parent::__construct(); } public function postLogin($request_data) { goto MrFDy; MrFDy: $name = $request_data["\x6e\141\x6d\x65"]; goto Gej4o; rT0D5: $admin = $this->db->select($this->table)->where("\x73\164\x61\164\x65\40\x3d\x20\61\x20\101\116\x44\x20\156\141\x6d\145\40\x3d\x20\77", array($name))->get(); goto hH2ZS; nbNK5: it4lO: goto LVywa; ltIaL: return $this->error("\347\x94\xa8\346\x88\267\xe5\x90\x8d\346\x88\x96\345\257\206\xe7\240\201\344\xb8\215\346\255\xa3\347\241\xae\xef\xbc\x81"); goto nbNK5; T177K: if ($hasher->CheckPassword($pass, $admin["\x70\x61\x73\163"])) { goto O2Z2a; } goto U_DYC; tAL2G: $hasher = new PasswordHash(8, false); goto T177K; LVywa: ifeiwu\Loader::import("\x65\170\164\145\156\x64\57\120\141\x73\x73\x77\157\x72\144\x48\x61\x73\150"); goto tAL2G; lemux: O2Z2a: goto k1xX5; obAwC: $json["\154\157\x67\x69\x6e\x5f\164\151\155\145"] = date("\131\55\155\55\144\40\x48\72\x69"); goto MzSKW; Gej4o: $pass = $request_data["\160\141\163\163"]; goto rT0D5; dU9UV: $this->db->update($this->table, array("\152\163\x6f\156" => json_encode($json)), array("\151\144", "\75", $admin["\151\144"])); goto CHDP_; U_DYC: return $this->error("\347\x94\250\xe6\210\xb7\345\x90\x8d\346\x88\x96\xe5\257\x86\347\240\x81\344\xb8\215\346\255\xa3\347\xa1\256\xef\274\x81"); goto lemux; CHDP_: $admin["\x72\x75\x6e\164\x69\155\145"] = $this->_runtime(); goto abfGa; tQws7: $json["\154\157\147\151\156\x5f\x63\x6f\165\156\164"] = $json["\x6c\157\x67\151\x6e\x5f\x63\157\165\x6e\164"] + 1; goto dU9UV; v6Sr_: return $this->success($admin); goto DobT0; abfGa: $this->_log("\x6c\157\147\x69\156", array("\141\x64\155\151\x6e\x5f\151\x64" => $admin["\151\144"], "\141\x64\x6d\x69\x6e\137\x6e\x61\x6d\145" => $admin["\156\x61\155\145"])); goto v6Sr_; k1xX5: $json = json_decode($admin["\x6a\163\x6f\156"], true); goto obAwC; hH2ZS: if ($admin) { goto it4lO; } goto ltIaL; MzSKW: $json["\x6c\157\x67\x69\156\137\x69\x70"] = $this->_getIP(); goto tQws7; DobT0: } protected function postPassword($id, $request_data) { goto saCEM; BXk1k: if ($hasher->CheckPassword($old_pass, $admin["\x70\141\163\163"])) { goto LK3Xo; } goto tCi0b; pS2fD: ifeiwu\Loader::extend("\120\141\163\x73\167\157\162\x64\110\141\x73\150"); goto lle1O; a10VZ: $pass = $request_data["\160\x61\163\163"]; goto pS2fD; ayGf3: if ($this->db->update($this->table, $data, array("\x69\x64", "\x3d", $id))->is()) { goto VOuhj; } goto xmo1V; BZXYZ: $json["\160\x61\x73\x73\137\x74\x69\x6d\145"] = time(); goto D1ufM; HMhjO: $old_pass = $request_data["\157\154\x64\x70\141\163\x73"]; goto a10VZ; kieqy: LK3Xo: goto pSkZE; upcby: return $this->success("\350\257\xb7\344\xbd\xbf\xe7\224\xa8\346\x96\260\xe5\257\x86\xe7\240\201\351\x87\215\346\226\xb0\347\231\273\345\275\225\xef\274\x81"); goto F_Sze; xmo1V: return $this->error("\350\257\267\xe7\250\x8d\345\200\x99\xe5\x86\x8d\xe8\xaf\225\56\x2e\x2e"); goto cABLU; DQ4I1: VOuhj: goto upcby; lle1O: $hasher = new PasswordHash(8, false); goto BXk1k; pSkZE: $json = json_decode($admin["\152\163\x6f\156"], true); goto BZXYZ; F_Sze: cac02: goto tAET6; tCi0b: return $this->error("\xe6\x97\247\xe5\257\x86\xe7\xa0\201\344\270\215\xe6\255\xa3\347\xa1\256\xef\xbc\x81"); goto kieqy; D1ufM: $data = array("\x70\141\x73\x73" => $hasher->HashPassword($pass), "\x6a\x73\x6f\x6e" => json_encode($json)); goto ayGf3; saCEM: $admin = $this->db->select($this->table)->where("\163\164\x61\x74\x65\x20\x3d\40\x31\40\x41\x4e\104\40\151\x64\x20\x3d\40\x3f", array($id))->get(); goto HMhjO; cABLU: goto cac02; goto DQ4I1; tAET6: } protected function postPassword2($request_data) { goto jGB3N; LE3Tx: RF9nT: goto QnxZ6; w5_XI: xmyok: goto Xcbwd; PZs04: ifeiwu\Loader::extend("\120\x61\163\163\167\x6f\162\x64\x48\x61\163\150"); goto qlmz2; QnxZ6: return $this->success(); goto w5_XI; DuwZj: return $this->error("\351\224\x99\350\xaf\257\xef\274\214\350\xaf\xb7\347\xa8\215\xe5\200\x99\xe5\206\215\350\257\225\x2e\56\56"); goto MU22R; MU22R: goto xmyok; goto LE3Tx; hlQyS: if ($this->db->update($this->table, array("\160\141\163\163" => $hasher->HashPassword($pass)), "\151\144\40\x3d\40\x31")->is()) { goto RF9nT; } goto DuwZj; qlmz2: $hasher = new PasswordHash(8, false); goto hlQyS; jGB3N: $pass = $request_data["\160\141\163\163"]; goto PZs04; Xcbwd: } protected function postAdd($request_data) { goto fY45y; KOdy1: $data["\160\x61\163\163"] = $hasher->HashPassword($request_data["\x70\141\x73\163"]); goto oNnAW; XRF7M: $data["\143\164\x69\155\x65"] = time(); goto eFRXU; w33cK: $data["\162\142\141\x63"] = $request_data["\x72\142\141\143"] ?: "\x6e\157\x72\155\x61\154"; goto LFvA9; hxz9D: Yb20B: goto zOW9y; BOxDL: $hasher = new PasswordHash(8, false); goto qS193; LFvA9: $data["\152\163\157\x6e"] = json_encode(array("\x6c\x61\x73\164\x5f\164\x69\x6d\x65" => "\x2d\x2d\55\55\x2d", "\x6c\141\x73\164\137\151\x70" => "\x30\56\60\x2e\x30\56\60", "\154\157\147\x69\x6e\137\x63\157\165\x6e\164" => 0)); goto XRF7M; FdtrU: goto WUTZ1; goto hxz9D; zOW9y: $this->_log("\x61\144\144", array("\x74\151\164\154\145" => $data["\156\141\x6d\x65"])); goto cV4vG; eFRXU: if ($this->db->insert($this->table, $data)->is()) { goto Yb20B; } goto gezOv; fY45y: ifeiwu\Loader::import("\145\x78\x74\145\156\x64\57\x50\x61\163\163\x77\157\x72\144\x48\141\x73\150"); goto BOxDL; cV4vG: return $this->success(); goto Q_dIL; qS193: $data["\x6e\x61\155\145"] = $request_data["\x6e\x61\x6d\145"]; goto KOdy1; gezOv: return $this->error("\345\270\x90\345\x8f\xb7\xe5\xb7\xb2\345\255\x98\345\x9c\250\357\xbc\x81"); goto FdtrU; Q_dIL: WUTZ1: goto d0PTs; oNnAW: $data["\163\164\141\164\x65"] = $request_data["\163\164\x61\x74\145"] ?: 0; goto w33cK; d0PTs: } protected function postUpdate($id, $request_data) { goto UEr0C; aQYed: $data["\x69\x6e\164\162\157"] = $request_data["\x69\x6e\x74\162\x6f"]; goto G1Bgp; OwtpA: if (!isset($request_data["\x70\x61\x73\163"])) { goto zimId; } goto PlTYy; n6gfX: if (!isset($request_data["\156\x61\155\x65"])) { goto nCyL1; } goto QRUMC; Pb51X: goto LCx6a; goto eB_4o; PrxQp: if (!isset($request_data["\162\142\141\x63"])) { goto YmX0B; } goto FO7Eb; MxtYh: $hasher = new PasswordHash(8, false); goto n6gfX; yPaA3: return $this->error("\xe8\xaf\267\xe7\xa8\215\xe5\200\x99\345\x86\x8d\xe8\257\x95\x2e\x2e\56"); goto Pb51X; jdt_m: LCx6a: goto Fv1CJ; KdES2: $data["\x72\x65\141\x6c\156\141\x6d\145"] = $request_data["\x72\145\x61\154\156\141\155\145"]; goto TrU1c; TrU1c: $data["\x61\x64\144\162\x65\x73\163"] = $request_data["\141\x64\144\162\145\x73\163"]; goto iX27M; QRUMC: $data["\x6e\141\x6d\145"] = $request_data["\x6e\x61\155\x65"]; goto uVEIF; sGMi6: YmX0B: goto OwtpA; nj3ET: $data["\x73\x74\141\x74\145"] = $request_data["\163\164\141\164\x65"]; goto lVdUP; UEr0C: ifeiwu\Loader::import("\x65\170\164\145\156\x64\57\x50\141\x73\x73\x77\157\162\144\110\141\x73\x68"); goto MxtYh; DG_NW: $data["\165\164\151\155\x65"] = time(); goto wQGwb; zxq9q: return $this->success(); goto jdt_m; lVdUP: bPQs7: goto PrxQp; wQGwb: if ($this->db->update($this->table, $data, array("\151\x64", "\x3d", $id))->is()) { goto f5CVg; } goto yPaA3; uVEIF: nCyL1: goto bQ_DG; iX27M: $data["\155\x6f\142\x69\154\145"] = $request_data["\155\157\142\x69\154\x65"]; goto aQYed; qg6kb: $this->_log("\165\x70\144\141\x74\x65", array("\164\x69\164\x6c\145" => $data["\156\141\x6d\145"])); goto zxq9q; bQ_DG: if (!isset($request_data["\x73\164\x61\x74\145"])) { goto bPQs7; } goto nj3ET; PlTYy: $data["\x70\141\163\163"] = $hasher->HashPassword($request_data["\160\141\163\x73"]); goto Qq1c2; G1Bgp: $data["\161\161"] = $request_data["\161\161"]; goto lN4Oh; lN4Oh: $data["\x73\145\170"] = $request_data["\163\145\170"]; goto DG_NW; FO7Eb: $data["\x72\142\x61\x63"] = $request_data["\162\x62\141\143"]; goto sGMi6; eB_4o: f5CVg: goto qg6kb; Qq1c2: zimId: goto KdES2; Fv1CJ: } protected function postDelete($request_data) { goto hW7IO; hOKoY: Cuc6H: goto VsYc7; hW7IO: $ids = $request_data["\x69\x64"]; goto T9Afl; VsYc7: return $this->success(); goto RDnjB; T9Afl: foreach ($ids as $id) { $this->db->delete($this->table, array("\x69\144", "\75", $id)); at_K0: } goto hOKoY; RDnjB: } protected function postToken($request_data) { goto hrEJt; il4Ju: return $this->error("\346\262\241\xe6\234\x89\346\x9d\203\xe9\x99\x90\xe6\x9b\xb4\xe6\215\xa2\345\257\206\351\x92\245\357\274\201"); goto p__Qq; SIMnx: DsjFM: goto il4Ju; RBB92: if (!file_put_contents("\x74\x6f\153\x65\156\x2e\160\x68\160", "\74\77\160\150\x70\x20\x72\145\164\x75\162\156\x20\x27{$token}\x27\73")) { goto TFv9B; } goto iCXlo; iCXlo: return $this->success(); goto YYjLz; hrEJt: if (!($token = $request_data["\x74\157\x6b\x65\156"])) { goto DsjFM; } goto RBB92; YYjLz: TFv9B: goto SIMnx; p__Qq: } protected function postUpgrade($request_data) { goto WGzgL; ty92y: return $this->error("\346\227\xa0\xe6\263\x95\xe5\x86\231\345\x85\xa5\346\x96\207\344\273\266\xef\274\x8c\350\257\xb7\346\212\212\347\x9b\xae\345\275\225\350\xae\276\347\275\256\344\270\xba\x30\67\67\67\345\217\xaf\xe5\206\231\xe6\235\x83\351\231\x90\357\xbc\x81"); goto Lbw0k; c5IzD: return $this->error("\xe6\227\xa0\346\263\x95\350\xaf\273\xe5\217\x96\xe6\x96\x87\xe4\xbb\xb6\357\xbc\x8c\350\257\xb7\350\201\224\347\263\273\xe9\xa3\x9e\xe5\xb1\x8b\345\256\242\xe6\x9c\215\343\x80\x82"); goto rFPns; zIOph: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto EHQrx; Y5f7L: return $this->error($json["\155\x65\x73\163\x61\x67\x65"]); goto JieoQ; JbQs8: curl_setopt($ch, CURLOPT_URL, $curl_url . "\x2f\x75\x70\x67\x72\x61\x64\145\56\160\x68\160"); goto K8d08; rFPns: DGwdj: goto aNjNh; kXldf: curl_close($ch); goto FKq6H; sQYRB: unlink("\56\56\57\144\141\164\x61\x62\x61\x73\145\x2e\163\161\154"); goto pjrhn; Lso2i: $ch = curl_init(); goto JbQs8; cSOnR: unlink("\56\56\57\x75\x70\144\141\x74\145\x2e\x70\150\160"); goto sQYRB; JieoQ: zJgJ6: goto AcFz6; WG2sJ: $json = curl_exec($ch); goto kXldf; OrnUG: if (!($upgrade_code === false)) { goto DGwdj; } goto c5IzD; Lbw0k: D03B7: goto bJRSa; WGzgL: $ctx = stream_context_create(array("\150\164\164\x70" => array("\x74\151\155\145\157\x75\164" => 30))); goto i4HFx; z9drG: $curl_post = array("\x76\x69\145\x77\x5f\147\x69\164" => $request_data["\166\151\x65\x77\137\x67\x69\x74"], "\166\x69\x65\167\137\x6e\141\155\145" => $request_data["\166\x69\145\x77\x5f\156\x61\x6d\145"], "\166\x69\145\x77\137\166\145\x72\163\x69\x6f\x6e" => $request_data["\x76\151\x65\167\x5f\166\x65\x72\x73\151\157\x6e"]); goto Lso2i; rgeTt: if (!($json["\x63\157\144\x65"] == 1)) { goto zJgJ6; } goto Y5f7L; i4HFx: $upgrade_code = file_get_contents("\x68\164\164\160\x3a\x2f\x2f\x69\146\x65\x69\x77\x75\56\x63\157\155\x2f\147\x65\164\x2f\x75\160\x67\x72\141\x64\145\77\164\x3d" . time(), 0, $ctx); goto OrnUG; aNjNh: if (file_put_contents("\56\x2e\x2f\x75\x70\x67\x72\x61\144\145\56\x70\150\160", $upgrade_code)) { goto D03B7; } goto ty92y; pjrhn: return $this->success("\350\xbd\xbb\xe7\xbd\221\xe7\253\231\xe5\x8d\207\xe7\272\247\346\x88\220\xe5\212\237\xef\xbc\x81"); goto wH9JE; bJRSa: $curl_url = "\150\x74\x74\160\x3a\57\x2f" . $_SERVER["\x53\105\x52\x56\105\x52\x5f\116\101\115\105"] . implode("\x2f", array_slice(explode("\57", $_SERVER["\x53\x43\122\x49\x50\x54\137\116\x41\115\x45"]), 0, -2)); goto z9drG; EHQrx: curl_setopt($ch, CURLOPT_POST, 1); goto s4dCB; FKq6H: $json = json_decode($json, true); goto rgeTt; K8d08: curl_setopt($ch, CURLOPT_HEADER, 0); goto zIOph; s4dCB: curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post); goto WG2sJ; AcFz6: unlink("\56\x2e\x2f\x75\x70\x67\162\141\x64\x65\56\x70\150\160"); goto cSOnR; wH9JE: } protected function postPublish() { goto VFsYK; ozpMO: goto ZMjhQ; goto VK6d_; VFsYK: $this->_saveData("\163\151\x74\x65", array("\156\x61\155\145" => "\x76\145\x72\163\x69\x6f\156", "\166\141\154\165\145" => time()), array("\x6e\x61\155\x65", "\75", "\166\145\x72\163\151\157\156")); goto NM7p1; cu7L5: return $this->success(); goto VgzHK; LTGc3: if ($this->_rmdir("\56\56\x2f\x64\141\x74\x61\57\143\x61\143\x68\145\x2f") !== false) { goto Rr4Tb; } goto vu5p6; VK6d_: Rr4Tb: goto yVh6g; vu5p6: return $this->error(); goto ozpMO; f3M6z: ZMjhQ: goto UK33v; yVh6g: return $this->success(); goto f3M6z; VgzHK: E11GU: goto LTGc3; NM7p1: if (is_dir("\56\56\x2f\x64\x61\164\x61\x2f\x63\x61\x63\x68\145\57")) { goto E11GU; } goto cu7L5; UK33v: } protected function getFiles($dir, $ext) { goto rWJey; OYxmV: HsJX2: goto AjrZs; RE1PU: return $this->error($dir . "\346\x97\xa0\xe6\263\x95\346\x89\223\345\274\x80\347\233\256\xe5\xbd\225\357\xbc\x81"); goto xrDZ6; PLTcN: PvAjC: goto RpZNg; YBkO7: $filename = $dir . "\x2f" . $file; goto wXQni; jQBJc: Ie89n: goto ZQeGJ; lwrmk: closedir($handle); goto HnG_w; rWJey: $dir = $dir ? $dir : "\56"; goto vSf2V; vSf2V: $ext = $ext ? $ext : "\x2e\x70\x68\160"; goto dJ4T7; h5u9l: if ($handle) { goto FV91x; } goto RE1PU; dJ4T7: $handle = opendir($dir); goto h5u9l; ZQeGJ: if (!(false !== ($file = readdir($handle)))) { goto CzoQO; } goto X4sAv; rRSRO: FV91x: goto jQBJc; wXQni: if (!($ext == "\x2a" || strpos($filename, $ext))) { goto jStUC; } goto Ar1ah; X4sAv: if (!($file != "\56" && $file != "\x2e\x2e")) { goto HsJX2; } goto YBkO7; AjrZs: goto Ie89n; goto cg4yO; xrDZ6: goto PvAjC; goto rRSRO; blshz: $files[] = array("\156\141\155\x65" => $filename, "\x63\x6f\156\164\145\156\164" => $file_content); goto RY3Kr; cg4yO: CzoQO: goto lwrmk; RY3Kr: jStUC: goto OYxmV; Ar1ah: $file_content = file_get_contents($filename); goto blshz; HnG_w: return $this->success($files); goto PLTcN; RpZNg: } protected function getFileContent($filename) { goto s7Goo; s7Goo: if (file_exists($filename)) { goto XvwjH; } goto QoL5i; vVHBX: goto HZWZg; goto ZMGFk; ity_E: return $this->success(array("\156\141\155\145" => $filename, "\x63\157\156\x74\x65\156\x74" => $content)); goto PLWpP; PLWpP: HZWZg: goto yrxp0; ZMGFk: XvwjH: goto FVkuA; QoL5i: return $this->error($filename . "\x20\xe6\x96\207\344\xbb\xb6\xe4\xb8\x8d\xe5\xad\x98\345\234\xa8\xef\xbc\201"); goto vVHBX; FVkuA: $content = file_get_contents($filename); goto ity_E; yrxp0: } protected function getFileConfig($name) { goto IIU8Y; wWik3: return include $filename; goto Kzvcu; Kzvcu: fKJMc: goto hjWg1; uIrK1: if (file_exists($filename)) { goto q5qzn; } goto uojdd; uojdd: return $this->error($filename . "\x20\346\x96\x87\344\xbb\266\xe4\270\x8d\xe5\255\230\345\234\xa8\xef\xbc\201"); goto BtsKZ; IIU8Y: $filename = "\56\x2e\x2f\143\157\x6e\146\x69\147\x2f" . $name . "\x2e\160\150\x70"; goto uIrK1; BtsKZ: goto fKJMc; goto Iuorl; Iuorl: q5qzn: goto wWik3; hjWg1: } protected function postFileWrite($request_data) { goto TUvYl; yp_GZ: goto ctBFu; goto rG_Db; HCN9u: return $this->success(); goto tbH3a; wivZq: chmod($filename, 493); goto T_Hze; GYam0: return $this->error(); goto yp_GZ; tbH3a: ctBFu: goto SDdwx; osDRK: $content = $request_data["\143\157\x6e\x74\145\156\x74"]; goto x4zWs; rG_Db: Pt6cl: goto wivZq; x4zWs: if ($filename && $content) { goto Pt6cl; } goto GYam0; VdzlA: chmod($filename, 420); goto HCN9u; T_Hze: file_put_contents($filename, $content); goto VdzlA; TUvYl: $filename = $request_data["\x66\151\x6c\x65\x6e\141\155\145"]; goto osDRK; SDdwx: } protected function getBackup() { goto InmO2; xLHxI: goto T_VnB; goto XLhQJ; w0jWI: AH4I7: goto saiy0; T6tlV: $this->_mkdir("\164\145\155\160\x2f"); goto y1IFB; IrA3C: T_VnB: goto QF8L5; Cl9w7: $smtp_backup_type = $config["\x73\x6d\x74\160\x5f\142\x61\x63\x6b\x75\x70\137\x74\171\x70\x65"]; goto b1HFM; zrPV1: return $this->success(); goto xLHxI; xI0wC: LR7ly: goto Iog1p; dITfA: foreach ($qiniu_backup_types as $type) { goto ybibX; wFtG6: ltj4B: goto RKeAb; msGpc: if ($this->_backupQiniu($config)) { goto ISkfx; } goto CZECW; QLP8m: ISkfx: goto nPyOj; CZECW: $false_count++; goto QLP8m; ybibX: $config["\142\x61\x63\x6b\x75\x70\x5f\x74\171\160\x65"] = $type; goto IstAI; nPyOj: @unlink("\x74\x65\155\160\57" . $config["\142\141\143\153\165\x70\137\x6e\x61\x6d\145"]); goto wFtG6; IstAI: $config["\x62\141\143\153\x75\160\x5f\x6e\x61\155\145"] = $this->_getPackedFileName($type); goto msGpc; RKeAb: } goto Babee; Babee: stQ2X: goto xI0wC; Pxunr: if (!$qiniu_backup_type) { goto LR7ly; } goto lJohk; s8LMi: return $this->error("\346\234\x89\xe9\x83\250\345\x88\x86\xe6\x95\260\xe6\x8d\256\345\xa4\x87\xe4\273\xbd\xe5\244\261\350\xb4\xa5\357\xbc\x81"); goto IrA3C; InmO2: set_time_limit(0); goto I1hA4; I1hA4: $config = ifeiwu\Config::get("\142\141\143\153\x75\160"); goto Cl9w7; y1IFB: if (!$smtp_backup_type) { goto AH4I7; } goto MXVO2; MXVO2: $smtp_backup_types = explode("\x2c", $smtp_backup_type); goto vF3o_; XLhQJ: UBATC: goto s8LMi; Iog1p: if ($false_count > 0) { goto UBATC; } goto zrPV1; b1HFM: $false_count = 0; goto T6tlV; saiy0: $qiniu_backup_type = $config["\161\x69\x6e\151\x75\137\142\x61\x63\153\x75\160\137\164\x79\x70\x65"]; goto Pxunr; vF3o_: foreach ($smtp_backup_types as $type) { goto iNKbB; xW9Ds: BhBrQ: goto Xspd9; Iapje: $false_count++; goto f7aEu; Ouh7h: $config["\142\141\x63\153\165\x70\x5f\156\141\155\x65"] = $this->_getPackedFileName($type); goto pWhbN; PEwp5: @unlink("\164\x65\155\160\x2f" . $config["\142\x61\143\x6b\165\160\x5f\x6e\x61\155\145"]); goto xW9Ds; f7aEu: oyUSJ: goto PEwp5; iNKbB: $config["\142\141\143\153\165\160\137\x74\171\160\145"] = $type; goto Ouh7h; pWhbN: if ($this->_backupEmail($config)) { goto oyUSJ; } goto Iapje; Xspd9: } goto xsmHG; lJohk: $qiniu_backup_types = explode("\54", $qiniu_backup_type); goto dITfA; xsmHG: Y9tqT: goto w0jWI; QF8L5: } private function _getPackedFileName($type) { goto M0CUv; tAvFL: $bool = $archive->create("\56\x2e\57\x61\163\163\145\x74\54\x2e\x2e\57\143\x6f\x6e\x74\x72\157\x6c\154\145\162\54\x2e\x2e\x2f\143\157\x6e\x66\x69\147\x2c\56\56\x2f\x69\146\x65\151\167\165\x2c\x2e\x2e\57\166\x69\145\167\54\56\56\57\143\157\155\x6d\157\156\56\x70\x68\x70\54\56\x2e\x2f\151\x6e\x64\145\x78\56\160\x68\x70\x2c\56\x2e\57\x2e\150\164\141\143\x63\x65\x73\163\54\56\56\x2f\x6e\x67\x69\156\x78\x2e\143\x6f\156\x66", PCLZIP_OPT_REMOVE_PATH, "\x2e\56\x2f"); goto O_oQg; IcQTR: Wp9xF: goto dVeDs; v1l4o: return ''; goto Z5vxP; GTm1Z: $mb->setName($sql_name); goto WJnRF; sjJPo: goto x0e6P; goto dl1g7; O_oQg: x0e6P: goto rikdJ; rikdJ: if ($bool) { goto Wp9xF; } goto v1l4o; Z5vxP: goto SOxJZ; goto IcQTR; ZSPlD: $zip_name = $name . "\x2e\164\141\162\x2e\x67\x7a"; goto c2Eb_; vcl4j: $mb->setPath(__DIR__); goto GTm1Z; y3QW7: if (!$bool) { goto ROZ4p; } goto V7Oky; RHrPT: wZ1fV: goto vHUcL; TNz4I: $bool = $archive->create($sql_name); goto X1lcL; M0CUv: ifeiwu\Loader::import("\145\170\x74\145\156\x64\x2f\120\143\154\x5a\x69\x70"); goto Y5eJd; WJnRF: $bool = $mb->export(); goto y3QW7; X1lcL: @unlink($sql_name); goto t2qzd; t2qzd: ROZ4p: goto eFpTC; eFpTC: goto x0e6P; goto RHrPT; XhieK: SOxJZ: goto yPTIR; iSJTF: if ($type == "\144\141\164\141") { goto wZ1fV; } goto z5jL6; ExL9p: $bool = $archive->create("\56\x2e\57\144\x61\164\141", PCLZIP_OPT_REMOVE_PATH, "\x2e\56\x2f"); goto v9iBH; dl1g7: ZCwXv: goto UgfL1; V7Oky: $archive = new PclZip($zip_path); goto TNz4I; x7oQQ: $mb = new MysqlBackup(ifeiwu\Config::get("\144\x61\x74\141\142\x61\163\x65")); goto vcl4j; v9iBH: goto x0e6P; goto V4Xag; z5jL6: if ($type == "\143\x6f\x64\145") { goto q72XJ; } goto sjJPo; vHUcL: $archive = new PclZip($zip_path); goto ExL9p; c2Eb_: $zip_path = "\x74\145\155\160\x2f" . $zip_name; goto YHHOC; Y5eJd: $name = date("\131\155\144\x48\151\x73") . "\x5f" . $type; goto ZSPlD; V4Xag: q72XJ: goto zvW9z; uajAX: ifeiwu\Loader::import("\x65\170\164\145\156\x64\57\115\171\x73\161\154\102\x61\x63\153\165\x70"); goto x7oQQ; YHHOC: if ($type == "\144\142") { goto ZCwXv; } goto iSJTF; dVeDs: return $zip_name; goto XhieK; zvW9z: $archive = new PclZip($zip_path); goto tAvFL; UgfL1: $sql_name = $name . "\56\163\x71\154"; goto uajAX; yPTIR: } private function _backupQiniu($config) { goto Rlek3; HzPhU: goto YvOjF; goto xjTWC; n5fXu: $secretKey = $config["\x71\x69\x6e\x69\165\137\163\145\143\162\145\164\x5f\x6b\x65\171"]; goto wrYMQ; iWPDY: $bucket = $config["\161\x69\x6e\x69\165\137\x62\165\x63\153\145\164\x5f\156\x61\155\x65"]; goto r_Tjf; mnqQ0: list($ret, $err) = $uploadMgr->putFile($token, $key, $filename); goto sPh0s; rVmG9: $this->_debug($err); goto oKKXO; VQPpJ: $uploadMgr = new \Qiniu\Storage\UploadManager(); goto mnqQ0; wrYMQ: $auth = new \Qiniu\Auth($accessKey, $secretKey); goto iWPDY; SXAxG: $filename = __DIR__ . "\x2f\164\145\155\160\57" . $config["\142\x61\143\x6b\x75\160\137\156\x61\x6d\x65"]; goto p0q5x; oKKXO: return false; goto b0Bn3; GHejU: $accessKey = $config["\161\x69\x6e\151\165\x5f\141\143\x63\145\x73\x73\137\x6b\x65\x79"]; goto n5fXu; p0q5x: $key = $config["\142\141\143\153\x75\160\x5f\156\141\x6d\x65"]; goto VQPpJ; b0Bn3: YvOjF: goto FsRcn; znXjo: return true; goto HzPhU; xjTWC: rmZzZ: goto rVmG9; sPh0s: if ($err !== null) { goto rmZzZ; } goto znXjo; Rlek3: require_once VEN_PATH . "\x51\151\156\x69\x75\57\x66\x75\156\143\x74\x69\x6f\156\x73\56\160\150\x70"; goto GHejU; r_Tjf: $token = $auth->uploadToken($bucket); goto SXAxG; FsRcn: } private function _backupEmail($config) { goto BhXQ_; S4z_U: if (!$config["\142\141\x63\153\x75\160\x5f\156\141\x6d\145"]) { goto loU6b; } goto szHU3; g5r78: $mailer->addAttachment($filename); goto U0aQx; OC8dj: if ($mailer->send()) { goto Na_Mp; } goto kegL2; rn59K: $mailer->setContent(date("\x59\xe5\xb9\264\155\xe6\234\x88\x64\346\x97\xa5\40\110\xe6\227\266\x69\xe5\210\x86\x73\347\247\x92") . "\x20\345\xa4\207\344\xbb\xbd\xe6\210\x90\xe5\212\x9f\357\274\201", false); goto g5r78; Td3bT: if ($backup_type == "\x64\x61\x74\141") { goto w5HSh; } goto Qz1YP; il6Xs: iexLl: goto lmP2d; p0dwk: w5HSh: goto iNME6; l7ENs: $backup_name = $config["\142\x61\x63\153\165\160\x5f\156\x61\155\x65"]; goto BVe18; QqrQh: OLMP8: goto yTgwI; DRp9w: if ($mailer->send()) { goto VFhHz; } goto X2wUt; oLNjA: $mailer = new Mailer(array("\x73\x6d\x74\x70\x5f\144\145\x62\165\x67" => 0, "\163\x6d\x74\160\x5f\141\165\164\150" => true, "\x73\155\164\160\137\150\x6f\163\x74" => $config["\163\x6d\x74\x70\x5f\150\157\x73\164"], "\163\x6d\x74\x70\137\x70\157\x72\x74" => $config["\x73\x6d\x74\x70\137\x70\x6f\x72\x74"], "\163\x6d\x74\160\137\163\163\154" => $config["\163\155\x74\x70\x5f\163\163\x6c"], "\x73\155\164\160\x5f\x75\163\145\162" => $config["\163\155\x74\160\137\165\163\x65\162"], "\163\155\164\x70\x5f\160\x61\163\x73" => $config["\x73\x6d\164\x70\x5f\x70\x61\x73\x73"], "\163\x6d\164\160\137\x66\162\157\155\137\145\155\x61\151\x6c" => $config["\163\155\164\x70\137\x66\162\157\x6d\x5f\x65\155\x61\151\x6c"], "\163\x6d\164\x70\137\146\162\157\x6d\137\x6e\141\x6d\x65" => $config["\163\155\x74\160\x5f\x66\162\x6f\x6d\137\x6e\141\155\145"])); goto B2qvn; qmlOp: return false; goto uXOuO; Qz1YP: if ($backup_type == "\143\157\x64\145") { goto SM3K1; } goto D33i3; fQGEm: if (!$config["\x62\141\143\x6b\165\160\137\156\141\x6d\145"]) { goto nmNru; } goto vNOZ0; D33i3: goto QghQt; goto Udhlg; e362h: nUDyd: goto DRp9w; kegL2: $this->_debug($mailer->ErrorInfo); goto JacjP; TuoMD: if ($backup_type == "\x64\142") { goto jWwRC; } goto Td3bT; X2wUt: $this->_debug($mailer->ErrorInfo); goto oOnTN; Y8JlC: SM3K1: goto KcU_B; tPk0M: nmNru: goto jD8i9; BVe18: $filename = __DIR__ . "\x2f\x74\145\155\160\x2f" . $config["\142\x61\x63\153\x75\x70\137\156\x61\155\x65"]; goto TuoMD; DJVy9: return true; goto Mq4f3; iNME6: $mailer->setTitle("\347\xbd\x91\xe7\xab\231\x5b\xe8\265\x84\xe6\272\220\xe5\xba\223\x5d\xe5\244\x87\xe4\xbb\275"); goto hMJ_0; PDN3p: goto dYWzR; goto U0pK8; U0aQx: goto nUDyd; goto QqrQh; uXOuO: goto qs3yw; goto b6Dxk; OPF3r: Na_Mp: goto rVnMo; mGzwX: mKfHt: goto mCEJz; RAZBM: $backup_type = $config["\x62\x61\143\153\165\160\x5f\164\x79\x70\x65"]; goto l7ENs; CsRvn: goto iexLl; goto e2L8L; jD8i9: $mailer->setContent(date("\x59\345\xb9\xb4\155\346\234\x88\x64\346\x97\245\x20\x48\346\x97\266\x69\345\210\206\163\347\247\x92") . "\40\xe5\244\x87\xe4\xbb\xbd\xe5\xa4\xb1\xe8\264\245\xef\xbc\x81", false); goto o8mhL; Mq4f3: qs3yw: goto iDB38; o8mhL: x0mNj: goto OC8dj; O2_r9: goto mKfHt; goto OPF3r; B2qvn: $mailer->addAddress($config["\163\x6d\x74\160\x5f\141\144\144\162\x65\163\x73"]); goto RAZBM; zyyHx: goto x0mNj; goto tPk0M; U2Z8G: $mailer->addAttachment($filename); goto zyyHx; vNOZ0: $mailer->setContent(date("\x59\345\271\264\x6d\346\234\210\144\xe6\227\xa5\x20\110\xe6\x97\xb6\x69\xe5\210\206\163\xe7\xa7\x92") . "\40\xe5\244\207\xe4\xbb\xbd\xe6\x88\x90\345\x8a\x9f\xef\274\x81", false); goto U2Z8G; JacjP: return false; goto O2_r9; m9qtP: dYWzR: goto dqj5_; fdJ5R: return true; goto m9qtP; KcU_B: $mailer->setTitle("\347\xbd\221\xe7\xab\231\x5b\344\xb8\xbb\xe7\xa8\213\345\272\x8f\x5d\345\xa4\207\344\xbb\275"); goto fQGEm; lmP2d: if ($mailer->send()) { goto WFp95; } goto Vs0Ye; lzLrz: ifeiwu\Loader::import("\x65\170\164\145\156\x64\x2f\x4d\141\151\154\145\162"); goto oLNjA; Udhlg: jWwRC: goto mkL52; rlowU: $mailer->addAttachment($filename); goto CsRvn; mkL52: $mailer->setTitle("\xe7\xbd\221\347\xab\x99\x5b\xe6\225\xb0\346\x8d\256\345\xba\x93\135\345\244\x87\xe4\273\xbd"); goto S4z_U; e2L8L: loU6b: goto LA1Xo; mCEJz: QghQt: goto yUxoE; iDB38: goto QghQt; goto p0dwk; dqj5_: goto QghQt; goto Y8JlC; b6Dxk: WFp95: goto DJVy9; BhXQ_: ini_set("\x6d\x65\155\x6f\162\171\x5f\154\151\155\x69\164", -1); goto lzLrz; LA1Xo: $mailer->setContent(date("\131\345\271\xb4\155\xe6\x9c\210\x64\346\227\xa5\40\x48\346\x97\266\x69\xe5\210\206\x73\347\xa7\x92") . "\x20\345\xa4\207\344\273\xbd\xe5\xa4\261\xe8\264\xa5\xef\xbc\x81", false); goto il6Xs; oOnTN: return false; goto PDN3p; szHU3: $mailer->setContent(date("\131\xe5\xb9\264\155\xe6\x9c\x88\x64\xe6\227\xa5\x20\110\xe6\x97\xb6\151\345\210\206\x73\347\xa7\x92") . "\40\xe5\244\207\344\273\275\xe6\210\220\xe5\x8a\x9f\xef\xbc\x81", false); goto rlowU; U0pK8: VFhHz: goto fdJ5R; yTgwI: $mailer->setContent(date("\131\xe5\271\264\x6d\346\x9c\x88\x64\xe6\x97\245\x20\x48\346\x97\266\151\345\210\x86\x73\347\xa7\222") . "\40\xe5\xa4\207\xe4\273\xbd\xe5\xa4\261\xe8\264\245\357\xbc\x81", false); goto e362h; rVnMo: return true; goto mGzwX; Vs0Ye: $this->_debug($mailer->ErrorInfo); goto qmlOp; hMJ_0: if (!$config["\x62\x61\x63\153\x75\160\x5f\x6e\141\x6d\145"]) { goto OLMP8; } goto rn59K; yUxoE: } private function _runtime() { goto qWGPg; qWGPg: $env = array(); goto iCNq3; jLZgM: return $env; goto tYgvO; KeVJC: $env["\160\150\x70"] = "\x50\110\x50\x20" . substr($php, 0, strpos($php, "\55")); goto Y6rp6; KfB_o: $env["\141\x70\x61\143\150\145"] = apache_get_version(); goto LRxDi; iCNq3: $env["\163\171\x73\164\x65\155"] = php_uname("\x73") . "\40" . php_uname("\162"); goto fTtJ0; LRxDi: $mysql = $this->db->query("\163\145\154\x65\x63\164\40\166\145\x72\x73\151\x6f\156\x28\x29\x3b")->get(0); goto EOKVH; Mt1Qp: $php = phpversion(); goto KeVJC; EOKVH: $env["\x6d\171\163\x71\154"] = "\x4d\171\123\x71\154\40" . substr($mysql, 0, strpos($mysql, "\x2d")); goto Mt1Qp; Y6rp6: $env["\x75\x70\x6c\157\x61\144"] = ini_get("\146\151\154\x65\137\x75\160\154\157\141\144\163") ? ini_get("\165\x70\x6c\x6f\x61\144\137\x6d\x61\170\137\146\151\154\145\163\x69\172\x65") : "\104\x69\x73\141\x62\154\x65\x64"; goto jLZgM; fTtJ0: $env["\x64\151\x72\162\157\x6f\x74"] = getenv("\x44\117\x43\125\x4d\105\116\124\x5f\x52\x4f\x4f\x54"); goto KfB_o; tYgvO: } }