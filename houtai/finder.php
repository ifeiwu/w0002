<?php
//Copyright (c) 2016 iFeiwu.com
 class Finder extends Ifeiwu { private $root = "\x64\x61\x74\141\57\x66\x69\156\x64\x65\x72\57"; function __construct() { goto iVieG; wqASt: oIvnj: goto EhKKS; EhKKS: parent::__construct(); goto d2D3r; iVieG: if ($this->table) { goto oIvnj; } goto rrAbe; rrAbe: $this->table = "\x66\151\156\x64\x65\x72"; goto wqASt; d2D3r: } protected function postAll($pid, $request_data) { goto JPLlp; JPLlp: $files = $this->db->select($this->table)->where($request_data["\x77\x68\x65\x72\x65"])->order($request_data["\x6f\x72\x64\145\x72"])->all(); goto JiLzg; qBPNe: na0ya: goto KFMSo; KFMSo: return array("\146\x69\154\x65\x73" => $files, "\x70\x61\164\150\163" => $paths); goto ZwMO6; JiLzg: $paths = array(); goto lJ2yZ; lJ2yZ: if (!$pid) { goto na0ya; } goto LGo6O; m_1Oj: $level = array_filter(explode("\54", $level)); goto hv844; hv844: $paths = $this->db->select($this->table, array("\151\144", "\156\141\x6d\145"))->where(array("\x69\144", "\x49\x4e", $level), "\x41\116\104", array("\x74\171\x70\x65", "\75", "\x66\157\154\x64\x65\162"))->all(); goto qBPNe; LGo6O: $level = $this->db->select($this->table, "\x6c\145\x76\145\154")->where(array("\151\144", "\75", $pid))->get(0); goto m_1Oj; ZwMO6: } protected function postAdd($request_data) { goto VVxUp; z_iHd: DNPxt: goto epwph; i4dT1: $imagesize = getimagesize($filename); goto lePhY; eCZ2l: return $this->error("\xe4\xb8\212\344\xbc\240\346\226\x87\344\273\xb6\40" . $name . "\40\xe5\244\xb1\xe8\264\xa5\xef\xbc\x81"); goto z_iHd; z5MNL: if (!(stripos($type, "\151\x6d\x61\x67\145") !== false && is_file($filename))) { goto T30R3; } goto i4dT1; lePhY: $data["\167\x69\144\164\150"] = $imagesize[0]; goto X1rhc; ROew3: $data["\156\141\x6d\145"] = $name; goto qxJbk; kJM5D: if ($id = $this->db->insert($this->table, $data)->id()) { goto DNPxt; } goto iV5f6; eF5Rm: if (is_dir($this->_UTF82GBK("\56\x2e\x2f" . $path))) { goto d2gMN; } goto wsPqX; VBx7i: d2gMN: goto O0TwH; epwph: $level = $this->_getLevel($id); goto hPMG9; zhl_P: $this->db->rollBack(); goto eCZ2l; yB6C_: ExFkU: goto KQ5pk; hPMG9: if (!$this->db->update($this->table, array("\154\x65\166\x65\x6c" => $level), array("\151\144", "\x3d", $id))->is()) { goto ExFkU; } goto JKraG; xtL4M: TdTVN: goto VBx7i; X1rhc: $data["\150\145\151\147\x68\164"] = $imagesize[1]; goto ECgsY; ERyEP: $data["\160\151\144"] = $foid ? $foid : 0; goto tDh4r; EQue0: $data["\143\x74\x69\x6d\145"] = time(); goto mRV5y; O0TwH: $filename = $this->_UTF82GBK("\x2e\56\x2f" . $path . $name); goto z5MNL; qxJbk: $data["\164\171\160\145"] = $type; goto ERyEP; M2k0J: return $this->error("\345\x88\x9b\345\xbb\272\xe6\226\207\344\xbb\xb6\xe5\xa4\xb9\xe5\xa4\261\350\264\245\xef\274\201"); goto xtL4M; f4NhA: return $this->success(); goto yB6C_; wsPqX: if (mkdir($this->_UTF82GBK("\56\x2e\57" . $path), 511, true)) { goto TdTVN; } goto M2k0J; mRV5y: $data["\x65\x78\x74"] = end(explode("\x2e", $name)); goto rZw5w; KcVRc: $data["\160\141\x74\x68"] = $path; goto ROew3; KQ5pk: $this->db->rollBack(); goto pBXOI; DoEfa: $name = $request_data["\156\141\155\x65"]; goto T8kYv; rZw5w: $this->db->beginTransaction(); goto kJM5D; VVxUp: $path = $request_data["\160\x61\x74\x68"]; goto DoEfa; tDh4r: $data["\x73\x69\172\145"] = $request_data["\x73\x69\172\x65"]; goto EQue0; pBXOI: return $this->error("\xe4\xb8\212\344\xbc\240\xe6\226\x87\344\xbb\266\40" . $name . "\40\xe5\244\261\xe8\264\xa5\xef\xbc\x81"); goto SwOt2; iV5f6: unlink($filename); goto zhl_P; xGdLb: $foid = $request_data["\x66\x6f\x69\x64"]; goto eF5Rm; T8kYv: $type = mime_content_type("\56\56\x2f" . $path . $name); goto xGdLb; JKraG: $this->db->commit(); goto f4NhA; ECgsY: T30R3: goto KcVRc; SwOt2: } protected function postMkdir($request_data) { goto ulne8; HUsE0: if (!$level) { goto IqaxJ; } goto qvjyz; ulne8: $pid = $request_data["\160\151\x64"]; goto vVtgU; o79_w: foreach ($folder as $value) { $folder_path .= $value["\156\141\155\145"] . "\x2f"; WSlrh: } goto Dq80A; ogAhH: if (mkdir($dirname, 493, true)) { goto ZiT42; } goto gzvxh; ln1Je: $this->db->commit(); goto OV0_3; ZPBLy: $data["\x70\x69\144"] = $pid; goto He86U; ogElp: HA6pO: goto ZOguF; rYT1M: if ($id = $this->db->insert($this->table, $data)->id()) { goto ewnpI; } goto Gw7ZY; ajBnb: $data["\156\141\155\x65"] = $name; goto ZPBLy; WKTP4: $this->db->rollBack(); goto I9L11; K_Q1H: $level = $this->_getLevel($id); goto V10b8; HjTZj: goto HA6pO; goto IPOjo; g_frh: if (!($name === null || $name === '')) { goto ZCS3i; } goto MhbcL; EbuJy: $folder = $this->db->select($this->table, "\x60\156\141\155\145\x60")->where(array("\151\144", "\x49\x4e", $level), "\101\x4e\x44", array("\164\171\x70\x65", "\75", "\146\157\154\x64\x65\162"))->all(); goto o79_w; OV0_3: return $this->success(); goto ogElp; IPOjo: KmZ0E: goto ln1Je; nQuG2: return $this->error("\xe5\210\x9b\xe5\xbb\272\346\226\207\xe4\xbb\xb6\xe5\xa4\271\345\244\261\xe8\264\245\357\xbc\x81"); goto HjTZj; epytt: if (!is_dir($dirname)) { goto e7unx; } goto mWtth; W8CO8: ewnpI: goto K_Q1H; tlt2B: $data["\x73\157\x72\164\x62\x79"] = 1; goto z8e1B; Fp0rI: $this->db->beginTransaction(); goto iXNPl; mWtth: return $this->error($name . "\x20\346\226\x87\xe4\273\266\xe5\244\xb9\345\xb7\xb2\xe5\255\230\345\234\xa8\357\274\201"); goto afN0v; ofXPH: IqaxJ: goto zQgaM; SHmOE: rmdir($dirname); goto jEk5V; TZeOQ: ZiT42: goto Fp0rI; lAEg6: $data["\x63\x74\151\x6d\145"] = time(); goto rYT1M; gzvxh: return $this->error("\xe5\210\233\xe5\xbb\272\xe6\226\207\xe4\xbb\xb6\345\xa4\271\xe5\244\261\350\xb4\245\xef\xbc\x81"); goto TZeOQ; V10b8: if ($this->db->update($this->table, array("\154\145\166\145\x6c" => $level), array("\151\x64", "\75", $id))->is()) { goto KmZ0E; } goto SHmOE; iXNPl: $data["\x70\x61\164\x68"] = $this->root . $folder_path; goto tlt2B; z8e1B: $data["\164\171\x70\145"] = "\x66\157\154\144\x65\x72"; goto lAEg6; I9L11: return $this->error("\345\210\x9b\xe5\xbb\xba\xe6\226\207\344\xbb\266\xe5\244\271\xe5\244\261\xe8\264\xa5\357\274\201"); goto W8CO8; mzCVv: ZCS3i: goto EhCO6; EhCO6: $data = array(); goto ajBnb; vVtgU: $name = $request_data["\156\x61\x6d\145"]; goto g_frh; jEk5V: $this->db->rollBack(); goto nQuG2; qvjyz: $level = array_filter(explode("\x2c", $level)); goto EbuJy; MhbcL: return $this->error("\xe6\227\240\346\225\210\347\232\204\xe5\217\x82\346\225\260\357\xbc\x81"); goto mzCVv; Dq80A: YpUd0: goto ofXPH; afN0v: e7unx: goto ogAhH; zQgaM: $dirname = $this->_UTF82GBK("\x2e\x2e\57" . $this->root . $folder_path . $name); goto epytt; He86U: $folder_path = ''; goto NzXhw; NzXhw: $level = $this->db->select($this->table, "\140\x6c\x65\166\x65\154\x60")->where(array("\151\144", "\75", $pid))->get(0); goto HUsE0; Gw7ZY: rmdir($dirname); goto WKTP4; ZOguF: } protected function postRename($request_data) { goto PimN0; vyDEP: if (is_dir($oldname)) { goto vmnhO; } goto DgbnJ; ixLTD: dwQHX: goto OZ3oR; AA6kw: ZNLXO: goto KRH2V; I7YLn: if ($is_path_update !== false) { goto g5pq3; } goto SsHkD; atISZ: Ykca8: goto nTyrI; x9TXg: uuMwk: goto bEiBs; QgdqC: tNN_H: goto rXHpU; SPlEC: j3DLe: goto OVmkM; s_6ro: goto Ykca8; goto B5Tsc; pNCA4: p_C0C: goto ZO3se; dIsIU: if (!(!$id || $name === null || $name === '')) { goto p_C0C; } goto avxMJ; KRH2V: $oldname = $this->_UTF82GBK("\56\x2e\x2f" . $path . $finder["\156\x61\155\x65"]); goto e7kl1; x6fbc: return $this->success(); goto F1vAR; bEiBs: if ($this->db->update($this->table, array("\156\141\x6d\145" => $name), array("\x69\x64", "\x3d", $id))->is()) { goto IuO3M; } goto CQUoK; WG02C: mxmZa: goto SPlEC; UwUrA: foreach ($sublist as $sub) { goto BV5GU; BV5GU: if (!($sub["\x6c\145\x76\x65\154"] == $finder["\154\145\166\145\x6c"])) { goto H8fpe; } goto W2OOg; v3mUJ: foreach ($level as $lid) { goto rAvOj; rAvOj: $levelobj = $this->db->select($this->table, array("\156\141\155\145", "\154\x65\166\x65\154"))->where("\x69\x64\x20\x3d\x20{$lid}\x20\101\x4e\104\40\x74\x79\160\x65\40\75\40\x27\x66\157\x6c\x64\x65\x72\x27")->get(); goto F5aJR; lfWPm: RlrI_: goto M_mj_; CZ018: $newpath .= $level_name != '' ? $level_name . "\x2f" : ''; goto hUEv_; M_mj_: $level_name = $levelobj["\156\141\155\145"]; goto CZ018; F5aJR: if (!($sub["\164\171\x70\145"] == "\146\157\154\x64\145\x72" && $sub["\154\x65\166\145\154"] == $levelobj["\x6c\x65\166\145\x6c"])) { goto RlrI_; } goto tvRi2; tvRi2: goto cLYM0; goto lfWPm; hUEv_: cLYM0: goto Swth0; Swth0: } goto OjfIv; TCRzp: $newpath = ''; goto TGSB_; TGSB_: $level = array_filter(explode("\x2c", $sub["\154\145\x76\145\x6c"])); goto v3mUJ; ko5sE: sdqiw: goto BKsm7; Jebrk: H8fpe: goto TCRzp; D66IA: goto Le9wP; goto qnqvU; XT0a7: if (!($is_path_update === false)) { goto PvTJj; } goto D66IA; OjfIv: swKZe: goto MunXt; W2OOg: goto sdqiw; goto Jebrk; MunXt: $is_path_update = $this->db->update($this->table, array("\160\x61\x74\150" => $this->root . $newpath), array("\x69\144", "\x3d", $sub["\151\144"]))->is(); goto XT0a7; qnqvU: PvTJj: goto ko5sE; BKsm7: } goto sKU4h; sKU4h: Le9wP: goto I7YLn; nu6rf: return $this->error("\346\226\207\344\xbb\xb6\351\207\215\xe5\x91\275\345\x90\x8d\xe5\244\xb1\350\264\xa5\xef\xbc\x81"); goto DnBsb; ahDMd: if (rename($oldname, $newname)) { goto dwQHX; } goto mwPOE; STwqL: $this->db->commit(); goto gzeFP; JdetZ: return $this->error("\xe6\x96\x87\xe4\xbb\266\xe5\xa4\271\351\x87\215\345\221\275\xe5\220\215\345\xa4\261\xe8\xb4\xa5\357\274\x81"); goto AwyL_; JLjgb: return $this->error("\346\x97\240\xe6\225\210\xe7\x9a\x84\xe8\267\257\345\276\x84\357\274\201"); goto AA6kw; uoJuD: goto j3DLe; goto QgdqC; t0gjY: eXJSi: goto s_6ro; OZ3oR: $this->db->commit(); goto x6fbc; u6UU8: wULUq: goto k5Fqz; AwyL_: goto dya2l; goto u6UU8; mMrVr: $name = $request_data["\156\x61\x6d\x65"]; goto dIsIU; k11NR: if ($this->db->update($this->table, array("\156\x61\x6d\145" => $name), array("\x69\x64", "\75", $id))->is()) { goto wULUq; } goto pk_qi; k5Fqz: if (rename($oldname, $newname)) { goto tNN_H; } goto F1LQE; avxMJ: return $this->error("\346\227\240\xe6\225\x88\xe7\x9a\x84\xe5\x8f\x82\346\x95\260\xef\274\x81"); goto pNCA4; hLopa: $this->db->rollBack(); goto SHrgR; mwPOE: $this->db->rollBack(); goto nu6rf; eOCH8: goto eXJSi; goto HrIHB; F1LQE: $this->db->rollBack(); goto OFvSp; ZO3se: $finder = $this->db->select($this->table, array("\x70\141\164\x68", "\156\141\x6d\145", "\154\x65\166\145\154"))->where(array("\x69\144", "\75", $id))->get(); goto GQGxu; rFTv3: if (!(!$path || stripos($path, $this->root) === false)) { goto ZNLXO; } goto JLjgb; bgeB4: goto mxmZa; goto PT29c; DnBsb: goto tW7nX; goto ixLTD; HrIHB: IuO3M: goto ahDMd; F1vAR: tW7nX: goto t0gjY; CQUoK: $this->db->rollBack(); goto gChF_; SHrgR: return $this->error("\xe6\x96\207\344\273\xb6\xe5\xa4\xb9\351\207\x8d\xe5\221\xbd\345\220\215\xe5\244\xb1\350\264\245\xef\xbc\x81"); goto bgeB4; DgbnJ: return $this->error("\xe6\211\276\344\270\x8d\345\210\xb0\351\207\215\xe5\221\xbd\345\220\215\xe7\232\204\346\226\207\xe4\xbb\xb6\57\346\226\207\344\xbb\xb6\xe5\244\271\357\xbc\201"); goto zAfy3; PT29c: g5pq3: goto STwqL; pk_qi: $this->db->rollBack(); goto JdetZ; B5Tsc: vmnhO: goto k11NR; OVmkM: dya2l: goto atISZ; zAfy3: goto Ykca8; goto x9TXg; e7kl1: $newname = $this->_UTF82GBK("\x2e\x2e\x2f" . $path . $name); goto ecdPW; SsHkD: rename($newname, $oldname); goto hLopa; rXHpU: $sublist = $this->db->select($this->table, array("\x69\144", "\154\145\x76\x65\154", "\x74\x79\160\145"))->where(array("\154\x65\166\x65\x6c", "\114\111\113\105", "\x25\54{$id}\x2c\x25"))->all(); goto UwUrA; ecdPW: $this->db->beginTransaction(); goto dW3W9; dW3W9: if (is_file($oldname)) { goto uuMwk; } goto vyDEP; PimN0: $id = $request_data["\x69\144"]; goto mMrVr; GQGxu: $path = $finder["\x70\141\164\150"]; goto rFTv3; gChF_: return $this->error("\xe6\226\207\xe4\273\266\351\207\x8d\345\221\xbd\345\x90\x8d\345\xa4\xb1\xe8\xb4\xa5\357\274\201"); goto eOCH8; OFvSp: return $this->error($name . "\40\xe6\226\x87\344\273\266\345\244\271\xe5\267\262\xe5\255\x98\345\234\xa8\357\274\201"); goto uoJuD; gzeFP: return $this->success(); goto WG02C; nTyrI: } protected function postIsFile($request_data) { goto P8gqq; I5Kox: JIohx: goto nkL0O; ovswb: for84: goto ynH3R; bUJfV: $name = $request_data["\156\141\x6d\x65"]; goto YVUly; P8gqq: $path = $request_data["\160\x61\164\150"]; goto bUJfV; nkL0O: return $this->success($name . "\x20\xe6\x96\207\344\xbb\266\345\267\262\345\255\230\345\234\250\xef\274\201"); goto ovswb; Du0md: goto for84; goto I5Kox; YVUly: if (file_exists($this->_UTF82GBK("\56\56\57" . $path . $name))) { goto JIohx; } goto SzNNg; SzNNg: return $this->error($name . "\40\346\226\207\344\273\xb6\xe4\xb8\x8d\345\255\230\xe5\x9c\xa8\357\274\x81"); goto Du0md; ynH3R: } protected function postDelete($request_data) { goto KS8UB; i2gq4: RoY5L: goto PhmPv; zQY_U: foreach ($ids as $id) { goto oBEFc; sg3oG: if (is_dir($filename)) { goto KLSeo; } goto Rc08N; jT1Nj: cdFUh: goto suoY7; oBqIq: $filename = $this->_UTF82GBK("\x2e\x2e\x2f" . $path . $name); goto fl974; DT3oq: if (!$this->db->delete($this->table, array("\x69\144", "\x3d", $id))->is()) { goto q4GEU; } goto LU811; Rc08N: $this->db->delete($this->table, array("\154\x65\x76\x65\x6c", "\x4c\x49\113\x45", "\x25\54{$id}\54\45")); goto SUO1W; uvC0y: KLSeo: goto iR17N; s6XRF: OJLy5: goto jT1Nj; wjvfq: if ($file) { goto jw93R; } goto R1Zgv; hG2XK: e_mqQ: goto DT3oq; l7cYZ: $path = $file["\160\x61\x74\150"]; goto IZQXH; W0tkx: goto zgatm; goto RjZzV; RjZzV: yqTj1: goto oBqIq; NNoVy: $this->db->delete($this->table, array("\151\x64", "\x3d", $id))->is(); goto W0tkx; IZQXH: $name = $file["\x6e\x61\x6d\145"]; goto wj_ce; SUO1W: goto cdFUh; goto hG2XK; LU811: @unlink($filename); goto Ytjco; suoY7: zgatm: goto VB2ik; wj_ce: if (!(!$path || stripos($path, "\144\141\164\141\x2f\146\x69\x6e\x64\145\x72\x2f") === false || $name == null || $name == '')) { goto yqTj1; } goto NNoVy; iR17N: if (!$this->db->delete($this->table, array("\x6c\x65\x76\145\x6c", "\x4c\x49\x4b\105", "\45\x2c{$id}\54\x25"))->is()) { goto OJLy5; } goto InZFb; gqT2Q: goto cdFUh; goto uvC0y; fl974: if (is_file($filename)) { goto e_mqQ; } goto sg3oG; R1Zgv: goto zgatm; goto qIqDO; InZFb: $this->_rmdir($filename); goto s6XRF; Ytjco: q4GEU: goto gqT2Q; qIqDO: jw93R: goto l7cYZ; oBEFc: $file = $this->db->select($this->table, array("\x70\x61\164\x68", "\156\141\x6d\145"))->where(array("\x69\144", "\x3d", $id))->get(); goto wjvfq; VB2ik: } goto i2gq4; PhmPv: return $this->success(); goto p9K6z; KS8UB: $ids = $request_data["\x69\x64"]; goto zQY_U; p9K6z: } protected function getCurPath($foid) { goto gFEqV; CGtPq: $level = array_filter(explode("\54", $level)); goto xt9Fn; z2NMx: return $this->success('', $data); goto WX9vG; xt9Fn: $data = $this->db->select($this->table, array("\x69\x64", "\x6e\x61\155\x65"))->where(array(array("\151\x64", "\111\116", $level), "\x41\x4e\104", array("\x74\x79\x70\x65", "\75", "\x66\157\x6c\144\145\x72")))->all(); goto z2NMx; gFEqV: $level = $this->db->select($this->table, "\x6c\x65\166\145\x6c")->where(array("\x69\144", "\x3d", $foid))->get(0); goto CGtPq; WX9vG: } }