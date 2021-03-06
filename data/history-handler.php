<?php
	require_once('handler.php');

	if(isset($_POST['patname'])){
		$sql = $handler->prepare("INSERT INTO 
			history(
			`pat_num`,
			`his_b1`,
			`his_b2`,
			`his_b3`,
			`his_b4`,
			`his_b5`,
			`his_b6`,
			`his_b7`,
			`his_b8`,
			`his_b9`,
			`his_c1`,
			`his_c2`,
			`his_c3`,
			`his_c4`,
			`his_c5`,
			`his_c6`,
			`his_c7`,
			`his_c8`,
			`his_c9`,
			`his_d1`,
			`his_e1`,
			`his_e1_2`,
			`his_e2`,
			`his_f1`,
			`his_f2`,
			`his_f3`,
			`his_f4`,
			`his_f5`,
			`his_f6`,
			`his_f7`,
			`his_f8`,
			`his_f9`,
			`his_f10`,
			`his_f11`,
			`his_f12`,
			`his_f13`,
			`his_f14`,
			`his_f15`,
			`his_f16`,
			`his_f17`,
			`his_f18`,
			`his_f19`,
			`his_f20`,
			`his_f21`,
			`his_f22`,
			`his_f23`,
			`his_f24`,
			`his_g1`,
			`his_g2`,
			`his_g3`,
			`his_g4`,
			`his_g5`,
			`his_g6`,
			`his_g7`,
			`his_h1`,
			`his_h2`,
			`his_h3`,
			`his_h4`,
			`his_h5`,
			`his_h6`,
			`his_h7`,
			`his_h8`,
			`his_h9`,
			`his_h10`,
			`his_i1`,
			`his_i2`,
			`his_i3`,
			`his_i4`,
			`his_i5`,
			`his_i6`,
			`his_i7`,
			`his_i8`,
			`his_i9`,
			`his_i10`,
			`his_j1`,
			`his_j2`,
			`his_j3`,
			`his_j4`,
			`his_j5`,
			`his_j6`,
			`his_j7`,
			`his_k1`,
			`his_k2`,
			`his_k3`,
			`his_k1_2`,
			`his_k2_2`,
			`his_k3_2`,
			`his_k1_3`,
			`his_k2_3`,
			`his_k3_3`,
			`his_l1`,
			`his_l2`,
			`his_l3`,
			`his_l4`,
			`his_l5`,
			`his_l6`,
			`his_l7`,
			`his_l8`,
			`his_l9`,
			`his_l10`,
			`his_l11`,
			`his_m1`,
			`his_m2`,
			`his_m3`,
			`his_m4`,
			`his_n1`,
			`his_n2`,
			`his_n3`,
			`his_n4`,
			`his_n5`,
			`his_n6`,
			`his_n7`,
			`his_n8`,
			`his_n9`,
			`his_o1`,
			`his_o2`,
			`his_o3`,
			`his_o4`,
			`his_o5`,
			`his_o6`,
			`his_o7`,
			`his_o8`,
			`his_o9`,
			`his_o10`,
			`his_o11`,
			`his_indate`
			) 

			VALUES(
				:pat_num,
				:b1,
				:b2,
				:b3,
				:b4,
				:b5,
				:b6,
				:b7,
				:b8,
				:b9,
				:c1,
				:c2,
				:c3,
				:c4,
				:c5,
				:c6,
				:c7,
				:c8,
				:c9,
				:d1,
				:e1,
				:e1_2,
				:e2,
				:f1,
				:f2,
				:f3,
				:f4,
				:f5,
				:f6,
				:f7,
				:f8,
				:f9,
				:f10,
				:f11,
				:f12,
				:f13,
				:f14,
				:f15,
				:f16,
				:f17,
				:f18,
				:f19,
				:f20,
				:f21,
				:f22,
				:f23,
				:f24,
				:g1,
				:g2,
				:g3,
				:g4,
				:g5,
				:g6,
				:g7,
				:h1,
				:h2,
				:h3,
				:h4,
				:h5,
				:h6,
				:h7,
				:h8,
				:h9,
				:h10,
				:i1,
				:i2,
				:i3,
				:i4,
				:i5,
				:i6,
				:i7,
				:i8,
				:i9,
				:i10,
				:j1,
				:j2,
				:j3,
				:j4,
				:j5,
				:j6,
				:j7,
				:k1,
				:k2,
				:k3,
				:k1_2,
				:k2_2,
				:k3_2,
				:k1_3,
				:k2_3,
				:k3_3,
				:l1,
				:l2,
				:l3,
				:l4,
				:l5,
				:l6,
				:l7,
				:l8,
				:l9,
				:l10,
				:l11,
				:m1,
				:m2,
				:m3,
				:m4,
				:n1,
				:n2,
				:n3,
				:n4,
				:n5,
				:n6,
				:n7,
				:n8,
				:n9,
				:o1,
				:o2,
				:o3,
				:o4,
				:o5,
				:o6,
				:o7,
				:o8,
				:o9,
				:o10,
				:o11,
				now()
			)"
		);

		$sql->execute(array(
			'pat_num' => isset($_POST['patname']) ? $_POST['patname'] : null,
			'b1' => isset($_POST['b1']) ? $_POST['b1'] : null,
			'b2' => isset($_POST['b2']) ? $_POST['b2'] : null,
			'b3' => isset($_POST['b3']) ? $_POST['b3'] : null,
			'b4' => isset($_POST['b4']) ? $_POST['b4'] : null,
			'b5' => isset($_POST['b5']) ? $_POST['b5'] : null,
			'b6' => isset($_POST['b6']) ? $_POST['b6'] : null,
			'b7' => isset($_POST['b7']) ? $_POST['b7'] : null,
			'b8' => isset($_POST['b8']) ? $_POST['b8'] : null,
			'b9' => isset($_POST['b9']) ? $_POST['b9'] : null,
			'c1' => isset($_POST['c1']) ? $_POST['c1'] : null,
			'c2' => isset($_POST['c2']) ? $_POST['c2'] : null,
			'c3' => isset($_POST['c3']) ? $_POST['c3'] : null,
			'c4' => isset($_POST['c4']) ? $_POST['c4'] : null,
			'c5' => isset($_POST['c5']) ? $_POST['c5'] : null,
			'c6' => isset($_POST['c6']) ? $_POST['c6'] : null,
			'c7' => isset($_POST['c7']) ? $_POST['c7'] : null,
			'c8' => isset($_POST['c8']) ? $_POST['c8'] : null,
			'c9' => isset($_POST['c9']) ? $_POST['c9'] : null,
			'd1' => isset($_POST['d1']) ? $_POST['d1'] : null,
			'e1' => isset($_POST['e1']) ? $_POST['e1'] : null,
			'e1_2' => isset($_POST['e1-2']) ? $_POST['e1-2'] : null,
			'e2' => isset($_POST['e2']) ? $_POST['e2'] : null,
			'f1' => isset($_POST['f1']) ? $_POST['f1'] : null,
			'f2' => isset($_POST['f2']) ? $_POST['f2'] : null,
			'f3' => isset($_POST['f3']) ? $_POST['f3'] : null,
			'f4' => isset($_POST['f4']) ? $_POST['f4'] : null,
			'f5' => isset($_POST['f5']) ? $_POST['f5'] : null,
			'f6' => isset($_POST['f6']) ? $_POST['f6'] : null,
			'f7' => isset($_POST['f7']) ? $_POST['f7'] : null,
			'f8' => isset($_POST['f8']) ? $_POST['f8'] : null,
			'f9' => isset($_POST['f9']) ? $_POST['f9'] : null,
			'f10' => isset($_POST['f10']) ? $_POST['f10'] : null,
			'f11' => isset($_POST['f11']) ? $_POST['f11'] : null,
			'f12' => isset($_POST['f12']) ? $_POST['f12'] : null,
			'f13' => isset($_POST['f13']) ? $_POST['f13'] : null,
			'f14' => isset($_POST['f14']) ? $_POST['f14'] : null,
			'f15' => isset($_POST['f15']) ? $_POST['f15'] : null,
			'f16' => isset($_POST['f16']) ? $_POST['f16'] : null,
			'f17' => isset($_POST['f17']) ? $_POST['f17'] : null,
			'f18' => isset($_POST['f18']) ? $_POST['f18'] : null,
			'f19' => isset($_POST['f19']) ? $_POST['f19'] : null,
			'f20' => isset($_POST['f20']) ? $_POST['f20'] : null,
			'f21' => isset($_POST['f21']) ? $_POST['f21'] : null,
			'f22' => isset($_POST['f22']) ? $_POST['f22'] : null,
			'f23' => isset($_POST['f23']) ? $_POST['f23'] : null,
			'f24' => isset($_POST['f24']) ? $_POST['f24'] : null,
			'g1' => isset($_POST['g1']) ? $_POST['g1'] : null,
			'g2' => isset($_POST['g2']) ? $_POST['g2'] : null,
			'g3' => isset($_POST['g3']) ? $_POST['g3'] : null,
			'g4' => isset($_POST['g4']) ? $_POST['g4'] : null,
			'g5' => isset($_POST['g5']) ? $_POST['g5'] : null,
			'g6' => isset($_POST['g6']) ? $_POST['g6'] : null,
			'g7' => isset($_POST['g7']) ? $_POST['g7'] : null,
			'h1' => isset($_POST['h1']) ? $_POST['h1'] : null,
			'h2' => isset($_POST['h2']) ? $_POST['h2'] : null,
			'h3' => isset($_POST['h3']) ? $_POST['h3'] : null,
			'h4' => isset($_POST['h4']) ? $_POST['h4'] : null,
			'h5' => isset($_POST['h5']) ? $_POST['h5'] : null,
			'h6' => isset($_POST['h6']) ? $_POST['h6'] : null,
			'h7' => isset($_POST['h7']) ? $_POST['h7'] : null,
			'h8' => isset($_POST['h8']) ? $_POST['h8'] : null,
			'h9' => isset($_POST['h9']) ? $_POST['h9'] : null,
			'h10' => isset($_POST['h10']) ? $_POST['h10'] : null,
			'i1' => isset($_POST['i1']) ? $_POST['i1'] : null,
			'i2' => isset($_POST['i2']) ? $_POST['i2'] : null,
			'i3' => isset($_POST['i3']) ? $_POST['i3'] : null,
			'i4' => isset($_POST['i4']) ? $_POST['i4'] : null,
			'i5' => isset($_POST['i5']) ? $_POST['i5'] : null,
			'i6' => isset($_POST['i6']) ? $_POST['i6'] : null,
			'i7' => isset($_POST['i7']) ? $_POST['i7'] : null,
			'i8' => isset($_POST['i8']) ? $_POST['i8'] : null,
			'i9' => isset($_POST['i9']) ? $_POST['i9'] : null,
			'i10' => isset($_POST['i10']) ? $_POST['i10'] : null,
			'j1' => isset($_POST['j1']) ? $_POST['j1'] : null,
			'j2' => isset($_POST['j2']) ? $_POST['j2'] : null,
			'j3' => isset($_POST['j3']) ? $_POST['j3'] : null,
			'j4' => isset($_POST['j4']) ? $_POST['j4'] : null,
			'j5' => isset($_POST['j5']) ? $_POST['j5'] : null,
			'j6' => isset($_POST['j6']) ? $_POST['j6'] : null,
			'j7' => isset($_POST['j7']) ? $_POST['j7'] : null,
			'k1' => isset($_POST['k1']) ? $_POST['k1'] : null,
			'k2' => isset($_POST['k2']) ? $_POST['k2'] : null,
			'k3' => isset($_POST['k3']) ? $_POST['k3'] : null,
			'k1_2' => isset($_POST['k1-2']) ? $_POST['k1-2'] : null,
			'k2_2' => isset($_POST['k2-2']) ? $_POST['k2-2'] : null,
			'k3_2' => isset($_POST['k3-2']) ? $_POST['k3-2'] : null,
			'k1_3' => isset($_POST['k1-3']) ? $_POST['k1-3'] : null,
			'k2_3' => isset($_POST['k2-3']) ? $_POST['k2-3'] : null,
			'k3_3' => isset($_POST['k3-3']) ? $_POST['k3-3'] : null,
			'l1' => isset($_POST['l1']) ? $_POST['l1'] : null,
			'l2' => isset($_POST['l2']) ? $_POST['l2'] : null,
			'l3' => isset($_POST['l3']) ? $_POST['l3'] : null,
			'l4' => isset($_POST['l4']) ? $_POST['l4'] : null,
			'l5' => isset($_POST['l5']) ? $_POST['l5'] : null,
			'l6' => isset($_POST['l6']) ? $_POST['l6'] : null,
			'l7' => isset($_POST['l7']) ? $_POST['l7'] : null,
			'l8' => isset($_POST['l8']) ? $_POST['l8'] : null,
			'l9' => isset($_POST['l9']) ? $_POST['l9'] : null,
			'l10' => isset($_POST['l10']) ? $_POST['l10'] : null,
			'l11' => isset($_POST['l11']) ? $_POST['l11'] : null,
			'm1' => isset($_POST['m1']) ? $_POST['m1'] : null,
			'm2' => isset($_POST['m2']) ? $_POST['m2'] : null,
			'm3' => isset($_POST['m3']) ? $_POST['m3'] : null,
			'm4' => isset($_POST['m4']) ? $_POST['m4'] : null,
			'n1' => isset($_POST['n1']) ? $_POST['n1'] : null,
			'n2' => isset($_POST['n2']) ? $_POST['n2'] : null,
			'n3' => isset($_POST['n3']) ? $_POST['n3'] : null,
			'n4' => isset($_POST['n4']) ? $_POST['n4'] : null,
			'n5' => isset($_POST['n5']) ? $_POST['n5'] : null,
			'n6' => isset($_POST['n6']) ? $_POST['n6'] : null,
			'n7' => isset($_POST['n7']) ? $_POST['n7'] : null,
			'n8' => isset($_POST['n8']) ? $_POST['n8'] : null,
			'n9' => isset($_POST['n9']) ? $_POST['n9'] : null,
			'o1' => isset($_POST['o1']) ? $_POST['o1'] : null,
			'o2' => isset($_POST['o2']) ? $_POST['o2'] : null,
			'o3' => isset($_POST['o3']) ? $_POST['o3'] : null,
			'o4' => isset($_POST['o4']) ? $_POST['o4'] : null,
			'o5' => isset($_POST['o5']) ? $_POST['o5'] : null,
			'o6' => isset($_POST['o6']) ? $_POST['o6'] : null,
			'o7' => isset($_POST['o7']) ? $_POST['o7'] : null,
			'o8' => isset($_POST['o8']) ? $_POST['o8'] : null,
			'o9' => isset($_POST['o9']) ? $_POST['o9'] : null,
			'o10' => isset($_POST['o10']) ? $_POST['o10'] : null,
			'o11' => isset($_POST['o11']) ? $_POST['o11'] : null
		));

		echo 1;

	}elseif(isset($_POST['usrid'])){
		$sql = $handler->prepare("UPDATE history SET
					his_b1=:b1,
					his_b2=:b2,
					his_b3=:b3,
					his_b4=:b4,
					his_b5=:b5,
					his_b6=:b6,
					his_b7=:b7,
					his_b8=:b8,
					his_b9=:b9,
					his_c1=:c1,
					his_c2=:c2,
					his_c3=:c3,
					his_c4=:c4,
					his_c5=:c5,
					his_c6=:c6,
					his_c7=:c7,
					his_c8=:c8,
					his_c9=:c9,
					his_d1=:d1,
					his_e1=:e1,
					his_e1_2=:e1_2,
					his_e2=:e2,
					his_f1=:f1,
					his_f2=:f2,
					his_f3=:f3,
					his_f4=:f4,
					his_f5=:f5,
					his_f6=:f6,
					his_f7=:f7,
					his_f8=:f8,
					his_f9=:f9,
					his_f10=:f10,
					his_f11=:f11,
					his_f12=:f12,
					his_f13=:f13,
					his_f14=:f14,
					his_f15=:f15,
					his_f16=:f16,
					his_f17=:f17,
					his_f18=:f18,
					his_f19=:f19,
					his_f20=:f20,
					his_f21=:f21,
					his_f22=:f22,
					his_f23=:f23,
					his_f24=:f24,
					his_g1=:g1,
					his_g2=:g2,
					his_g3=:g3,
					his_g4=:g4,
					his_g5=:g5,
					his_g6=:g6,
					his_g7=:g7,
					his_h1=:h1,
					his_h2=:h2,
					his_h3=:h3,
					his_h4=:h4,
					his_h5=:h5,
					his_h6=:h6,
					his_h7=:h7,
					his_h8=:h8,
					his_h9=:h9,
					his_h10=:h10,
					his_i1=:i1,
					his_i2=:i2,
					his_i3=:i3,
					his_i4=:i4,
					his_i5=:i5,
					his_i6=:i6,
					his_i7=:i7,
					his_i8=:i8,
					his_i9=:i9,
					his_i10=:i10,
					his_j1=:j1,
					his_j2=:j2,
					his_j3=:j3,
					his_j4=:j4,
					his_j5=:j5,
					his_j6=:j6,
					his_j7=:j7,
					his_k1=:k1,
					his_k2=:k2,
					his_k3=:k3,
					his_k1_2=:k1_2,
					his_k2_2=:k2_2,
					his_k3_2=:k3_2,
					his_k1_3=:k1_3,
					his_k2_3=:k2_3,
					his_k3_3=:k3_3,
					his_l1=:l1,
					his_l2=:l2,
					his_l3=:l3,
					his_l4=:l4,
					his_l5=:l5,
					his_l6=:l6,
					his_l7=:l7,
					his_l8=:l8,
					his_l9=:l9,
					his_l10=:l10,
					his_l11=:l11,
					his_m1=:m1,
					his_m2=:m2,
					his_m3=:m3,
					his_m4=:m4,
					his_n1=:n1,
					his_n2=:n2,
					his_n3=:n3,
					his_n4=:n4,
					his_n5=:n5,
					his_n6=:n6,
					his_n7=:n7,
					his_n8=:n8,
					his_n9=:n9,
					his_o1=:o1,
					his_o2=:o2,
					his_o3=:o3,
					his_o4=:o4,
					his_o5=:o5,
					his_o6=:o6,
					his_o7=:o7,
					his_o8=:o8,
					his_o9=:o9,
					his_o10=:o10,
					his_o11=:o11
					WHERE pat_num=:usrid
				");

		$sql->execute(array(
			'b1'=> isset($_POST['b1']) ? $_POST['b1'] : null,
			'b2' => isset($_POST['b2']) ? $_POST['b2'] : null,
			'b3' => isset($_POST['b3']) ? $_POST['b3'] : null,
			'b4' => isset($_POST['b4']) ? $_POST['b4'] : null,
			'b5' => isset($_POST['b5']) ? $_POST['b5'] : null,
			'b6' => isset($_POST['b6']) ? $_POST['b6'] : null,
			'b7' => isset($_POST['b7']) ? $_POST['b7'] : null,
			'b8' => isset($_POST['b8']) ? $_POST['b8'] : null,
			'b9' => isset($_POST['b9']) ? $_POST['b9'] : null,
			'c1' => isset($_POST['c1']) ? $_POST['c1'] : null,
			'c2' => isset($_POST['c2']) ? $_POST['c2'] : null,
			'c3' => isset($_POST['c3']) ? $_POST['c3'] : null,
			'c4' => isset($_POST['c4']) ? $_POST['c4'] : null,
			'c5' => isset($_POST['c5']) ? $_POST['c5'] : null,
			'c6' => isset($_POST['c6']) ? $_POST['c6'] : null,
			'c7' => isset($_POST['c7']) ? $_POST['c7'] : null,
			'c8' => isset($_POST['c8']) ? $_POST['c8'] : null,
			'c9' => isset($_POST['c9']) ? $_POST['c9'] : null,
			'd1' => isset($_POST['d1']) ? $_POST['d1'] : null,
			'e1' => isset($_POST['e1']) ? $_POST['e1'] : null,
			'e1_2' => isset($_POST['e1-2']) ? $_POST['e1-2'] : null,
			'e2' => isset($_POST['e2']) ? $_POST['e2'] : null,
			'f1' => isset($_POST['f1']) ? $_POST['f1'] : null,
			'f2' => isset($_POST['f2']) ? $_POST['f2'] : null,
			'f3' => isset($_POST['f3']) ? $_POST['f3'] : null,
			'f4' => isset($_POST['f4']) ? $_POST['f4'] : null,
			'f5' => isset($_POST['f5']) ? $_POST['f5'] : null,
			'f6' => isset($_POST['f6']) ? $_POST['f6'] : null,
			'f7' => isset($_POST['f7']) ? $_POST['f7'] : null,
			'f8' => isset($_POST['f8']) ? $_POST['f8'] : null,
			'f9' => isset($_POST['f9']) ? $_POST['f9'] : null,
			'f10' => isset($_POST['f10']) ? $_POST['f10'] : null,
			'f11' => isset($_POST['f11']) ? $_POST['f11'] : null,
			'f12' => isset($_POST['f12']) ? $_POST['f12'] : null,
			'f13' => isset($_POST['f13']) ? $_POST['f13'] : null,
			'f14' => isset($_POST['f14']) ? $_POST['f14'] : null,
			'f15' => isset($_POST['f15']) ? $_POST['f15'] : null,
			'f16' => isset($_POST['f16']) ? $_POST['f16'] : null,
			'f17' => isset($_POST['f17']) ? $_POST['f17'] : null,
			'f18' => isset($_POST['f18']) ? $_POST['f18'] : null,
			'f19' => isset($_POST['f19']) ? $_POST['f19'] : null,
			'f20' => isset($_POST['f20']) ? $_POST['f20'] : null,
			'f21' => isset($_POST['f21']) ? $_POST['f21'] : null,
			'f22' => isset($_POST['f22']) ? $_POST['f22'] : null,
			'f23' => isset($_POST['f23']) ? $_POST['f23'] : null,
			'f24' => isset($_POST['f24']) ? $_POST['f24'] : null,
			'g1' => isset($_POST['g1']) ? $_POST['g1'] : null,
			'g2' => isset($_POST['g2']) ? $_POST['g2'] : null,
			'g3' => isset($_POST['g3']) ? $_POST['g3'] : null,
			'g4' => isset($_POST['g4']) ? $_POST['g4'] : null,
			'g5' => isset($_POST['g5']) ? $_POST['g5'] : null,
			'g6' => isset($_POST['g6']) ? $_POST['g6'] : null,
			'g7' => isset($_POST['g7']) ? $_POST['g7'] : null,
			'h1' => isset($_POST['h1']) ? $_POST['h1'] : null,
			'h2' => isset($_POST['h2']) ? $_POST['h2'] : null,
			'h3' => isset($_POST['h3']) ? $_POST['h3'] : null,
			'h4' => isset($_POST['h4']) ? $_POST['h4'] : null,
			'h5' => isset($_POST['h5']) ? $_POST['h5'] : null,
			'h6' => isset($_POST['h6']) ? $_POST['h6'] : null,
			'h7' => isset($_POST['h7']) ? $_POST['h7'] : null,
			'h8' => isset($_POST['h8']) ? $_POST['h8'] : null,
			'h9' => isset($_POST['h9']) ? $_POST['h9'] : null,
			'h10' => isset($_POST['h10']) ? $_POST['h10'] : null,
			'i1' => isset($_POST['i1']) ? $_POST['i1'] : null,
			'i2' => isset($_POST['i2']) ? $_POST['i2'] : null,
			'i3' => isset($_POST['i3']) ? $_POST['i3'] : null,
			'i4' => isset($_POST['i4']) ? $_POST['i4'] : null,
			'i5' => isset($_POST['i5']) ? $_POST['i5'] : null,
			'i6' => isset($_POST['i6']) ? $_POST['i6'] : null,
			'i7' => isset($_POST['i7']) ? $_POST['i7'] : null,
			'i8' => isset($_POST['i8']) ? $_POST['i8'] : null,
			'i9' => isset($_POST['i9']) ? $_POST['i9'] : null,
			'i10' => isset($_POST['i10']) ? $_POST['i10'] : null,
			'j1' => isset($_POST['j1']) ? $_POST['j1'] : null,
			'j2' => isset($_POST['j2']) ? $_POST['j2'] : null,
			'j3' => isset($_POST['j3']) ? $_POST['j3'] : null,
			'j4' => isset($_POST['j4']) ? $_POST['j4'] : null,
			'j5' => isset($_POST['j5']) ? $_POST['j5'] : null,
			'j6' => isset($_POST['j6']) ? $_POST['j6'] : null,
			'j7' => isset($_POST['j7']) ? $_POST['j7'] : null,
			'k1' => isset($_POST['k1']) ? $_POST['k1'] : null,
			'k2' => isset($_POST['k2']) ? $_POST['k2'] : null,
			'k3' => isset($_POST['k3']) ? $_POST['k3'] : null,
			'k1_2' => isset($_POST['k1-2']) ? $_POST['k1-2'] : null,
			'k2_2' => isset($_POST['k2-2']) ? $_POST['k2-2'] : null,
			'k3_2' => isset($_POST['k3-2']) ? $_POST['k3-2'] : null,
			'k1_3' => isset($_POST['k1-3']) ? $_POST['k1-3'] : null,
			'k2_3' => isset($_POST['k2-3']) ? $_POST['k2-3'] : null,
			'k3_3' => isset($_POST['k3-3']) ? $_POST['k3-3'] : null,
			'l1' => isset($_POST['l1']) ? $_POST['l1'] : null,
			'l2' => isset($_POST['l2']) ? $_POST['l2'] : null,
			'l3' => isset($_POST['l3']) ? $_POST['l3'] : null,
			'l4' => isset($_POST['l4']) ? $_POST['l4'] : null,
			'l5' => isset($_POST['l5']) ? $_POST['l5'] : null,
			'l6' => isset($_POST['l6']) ? $_POST['l6'] : null,
			'l7' => isset($_POST['l7']) ? $_POST['l7'] : null,
			'l8' => isset($_POST['l8']) ? $_POST['l8'] : null,
			'l9' => isset($_POST['l9']) ? $_POST['l9'] : null,
			'l10' => isset($_POST['l10']) ? $_POST['l10'] : null,
			'l11' => isset($_POST['l11']) ? $_POST['l11'] : null,
			'm1' => isset($_POST['m1']) ? $_POST['m1'] : null,
			'm2' => isset($_POST['m2']) ? $_POST['m2'] : null,
			'm3' => isset($_POST['m3']) ? $_POST['m3'] : null,
			'm4' => isset($_POST['m4']) ? $_POST['m4'] : null,
			'n1' => isset($_POST['n1']) ? $_POST['n1'] : null,
			'n2' => isset($_POST['n2']) ? $_POST['n2'] : null,
			'n3' => isset($_POST['n3']) ? $_POST['n3'] : null,
			'n4' => isset($_POST['n4']) ? $_POST['n4'] : null,
			'n5' => isset($_POST['n5']) ? $_POST['n5'] : null,
			'n6' => isset($_POST['n6']) ? $_POST['n6'] : null,
			'n7' => isset($_POST['n7']) ? $_POST['n7'] : null,
			'n8' => isset($_POST['n8']) ? $_POST['n8'] : null,
			'n9' => isset($_POST['n9']) ? $_POST['n9'] : null,
			'o1' => isset($_POST['o1']) ? $_POST['o1'] : null,
			'o2' => isset($_POST['o2']) ? $_POST['o2'] : null,
			'o3' => isset($_POST['o3']) ? $_POST['o3'] : null,
			'o4' => isset($_POST['o4']) ? $_POST['o4'] : null,
			'o5' => isset($_POST['o5']) ? $_POST['o5'] : null,
			'o6' => isset($_POST['o6']) ? $_POST['o6'] : null,
			'o7' => isset($_POST['o7']) ? $_POST['o7'] : null,
			'o8' => isset($_POST['o8']) ? $_POST['o8'] : null,
			'o9' => isset($_POST['o9']) ? $_POST['o9'] : null,
			'o10' => isset($_POST['o10']) ? $_POST['o10'] : null,
			'o11' => isset($_POST['o11']) ? $_POST['o11'] : null,
            'usrid'=> isset($_POST['usrid']) ? $_POST['usrid'] : null
		));

		echo 1;
	}elseif (isset($_POST['rechis'])) {
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, history.his_indate FROM patient
			INNER JOIN history ON patient.pat_num = history.pat_num ORDER BY history.his_indate DESC LIMIT 5");

		while ($row=$sql->fetch(PDO::FETCH_OBJ)) {
			 if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
            }

            $fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
            $dateCre = date_create($row->his_indate);

			$date = date_format($dateCre, 'M. d, Y');

            $result[] = array(
            	'pat_num' => $row->pat_num,
            	'fullname' => $fullname,
            	'img' => substr(ucfirst($row->pat_fname), 0, 1)."".substr(ucfirst($row->pat_lname), 0, 1),
            	'indate' => $date
            );
		}

		echo json_encode($result);

	}elseif(isset($_POST['get_usr'])){

        $usrid = $_POST['get_usr'];
        $sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, 
        	history.his_b1,
        	history.his_b2,
        	history.his_b3,
        	history.his_b4,
        	history.his_b5,
        	history.his_b6,
        	history.his_b7,
        	history.his_b8,
        	history.his_b9,
        	history.his_c1,
        	history.his_c2,
        	history.his_c3,
        	history.his_c4,
        	history.his_c5,
        	history.his_c6,
        	history.his_c7,
        	history.his_c8,
        	history.his_c9,
        	history.his_d1,
        	history.his_e1,
        	history.his_e2,
        	history.his_e1_2,
        	history.his_f1,
        	history.his_f2,
        	history.his_f3,
        	history.his_f4,
        	history.his_f5,
        	history.his_f6,
        	history.his_f7,
        	history.his_f8,
        	history.his_f9,
        	history.his_f10,
        	history.his_f11,
        	history.his_f12,
        	history.his_f13,
        	history.his_f14,
        	history.his_f15,
        	history.his_f16,
        	history.his_f17,
        	history.his_f18,
        	history.his_f19,
        	history.his_f20,
        	history.his_f21,
        	history.his_f22,
        	history.his_f23,
        	history.his_f24,
        	history.his_g1,
        	history.his_g2,
        	history.his_g3,
        	history.his_g4,
        	history.his_g5,
        	history.his_g6,
        	history.his_g7,
        	history.his_h1,
        	history.his_h2,
        	history.his_h3,
        	history.his_h4,
        	history.his_h5,
        	history.his_h6,
        	history.his_h7,
        	history.his_h8,
        	history.his_h9,
        	history.his_h10,
        	history.his_i1,
        	history.his_i2,
        	history.his_i3,
        	history.his_i4,
        	history.his_i5,
        	history.his_i6,
        	history.his_i7,
        	history.his_i8,
        	history.his_i9,
        	history.his_i10,
        	history.his_j1,
        	history.his_j2,
        	history.his_j3,
        	history.his_j4,
        	history.his_j5,
        	history.his_j6,
        	history.his_j7,
        	history.his_k1,
        	history.his_k2,
        	history.his_k3,
        	history.his_k1_2,
        	history.his_k2_2,
        	history.his_k3_2,
        	history.his_k1_3,
        	history.his_k2_3,
        	history.his_k3_3,
        	history.his_l1,
        	history.his_l2,
        	history.his_l3,
        	history.his_l4,
        	history.his_l5,
        	history.his_l6,
        	history.his_l7,
        	history.his_l8,
        	history.his_l9,
        	history.his_l10,
        	history.his_l11,
        	history.his_m1,
        	history.his_m2,
        	history.his_m3,
        	history.his_m4,
        	history.his_n1,
        	history.his_n2,
        	history.his_n3,
        	history.his_n4,
        	history.his_n5,
        	history.his_n6,
        	history.his_n7,
        	history.his_n8,
        	history.his_n9,
        	history.his_o1,
        	history.his_o2,
        	history.his_o3,
        	history.his_o4,
        	history.his_o5,
        	history.his_o6,
        	history.his_o7,
        	history.his_o8,
        	history.his_o9,
        	history.his_o10,
        	history.his_o11
        	FROM patient
			INNER JOIN history ON patient.pat_num = history.pat_num WHERE history.pat_num = '$usrid'");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);

			 $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'b1' => $row->his_b1,
				'b2' => $row->his_b2,
				'b3' => $row->his_b3,
				'b4' => $row->his_b4,
				'b5' => $row->his_b5,
				'b6' => $row->his_b6,
				'b7' => $row->his_b7,
				'b8' => $row->his_b8,
				'b9' => $row->his_b9,
				'c1' => $row->his_c1,
				'c2' => $row->his_c2,
	        	'c3' => $row->his_c3,
	        	'c4' => $row->his_c4,
	        	'c5' => $row->his_c5,
	        	'c6' => $row->his_c6,
	        	'c7' => $row->his_c7,
	        	'c8' => $row->his_c8,
	        	'c9' => $row->his_c9,
	        	'd1' => $row->his_d1,
	        	'e1' => $row->his_e1,
	        	'e2' => $row->his_e2,
	        	'e1_2' => $row->his_e1_2,
	        	'f1' => $row->his_f1,
	        	'f2' => $row->his_f2,
	        	'f3' => $row->his_f3,
	        	'f4' => $row->his_f4,
	        	'f5' => $row->his_f5,
	        	'f6' => $row->his_f6,
	        	'f7' => $row->his_f7,
	        	'f8' => $row->his_f8,
	        	'f9' => $row->his_f9,
	        	'f10' => $row->his_f10,
	        	'f11' => $row->his_f11,
	        	'f12' => $row->his_f12,
	        	'f13' => $row->his_f13,
	        	'f14' => $row->his_f14,
	        	'f15' => $row->his_f15,
	        	'f16' => $row->his_f16,
	        	'f17' => $row->his_f17,
	        	'f18' => $row->his_f18,
	        	'f19' => $row->his_f19,
	        	'f20' => $row->his_f20,
	        	'f21' => $row->his_f21,
	        	'f22' => $row->his_f22,
	        	'f23' => $row->his_f23,
	        	'f24' => $row->his_f24,
	        	'g1' => $row->his_g1,
	        	'g2' => $row->his_g2,
	        	'g3' => $row->his_g3,
	        	'g4' => $row->his_g4,
	        	'g5' => $row->his_g5,
	        	'g6' => $row->his_g6,
	        	'g7' => $row->his_g7,
	        	'h1' => $row->his_h1,
	        	'h2' => $row->his_h2,
	        	'h3' => $row->his_h3,
	        	'h4' => $row->his_h4,
	        	'h5' => $row->his_h5,
	        	'h6' => $row->his_h6,
	        	'h7' => $row->his_h7,
	        	'h8' => $row->his_h8,
	        	'h9' => $row->his_h9,
	        	'h10' => $row->his_h10,
	        	'i1' => $row->his_i1,
	        	'i2' => $row->his_i2,
	        	'i3' => $row->his_i3,
	        	'i4' => $row->his_i4,
	        	'i5' => $row->his_i5,
	        	'i6' => $row->his_i6,
	        	'i7' => $row->his_i7,
	        	'i8' => $row->his_i8,
	        	'i9' => $row->his_i9,
	        	'i10' => $row->his_i10,
	        	'j1' => $row->his_j1,
	        	'j2' => $row->his_j2,
	        	'j3' => $row->his_j3,
	        	'j4' => $row->his_j4,
	        	'j5' => $row->his_j5,
	        	'j6' => $row->his_j6,
	        	'j7' => $row->his_j7,
	        	'k1' => $row->his_k1,
	        	'k2' => $row->his_k2,
	        	'k3' => $row->his_k3,
	        	'k1_2' => $row->his_k1_2,
	        	'k2_2' => $row->his_k2_2,
	        	'k3_2' => $row->his_k3_2,
	        	'k1_3' => $row->his_k1_3,
	        	'k2_3' => $row->his_k2_3,
	        	'k3_3' => $row->his_k3_3,
	        	'l1' => $row->his_l1,
	        	'l2' => $row->his_l2,
	        	'l3' => $row->his_l3,
	        	'l4' => $row->his_l4,
	        	'l5' => $row->his_l5,
	        	'l6' => $row->his_l6,
	        	'l7' => $row->his_l7,
	        	'l8' => $row->his_l8,
	        	'l9' => $row->his_l9,
	        	'l10' => $row->his_l10,
	        	'l11' => $row->his_l11,
	        	'm1' => $row->his_m1,
	        	'm2' => $row->his_m2,
	        	'm3' => $row->his_m3,
	        	'm4' => $row->his_m4,
	        	'n1' => $row->his_n1,
	        	'n2' => $row->his_n2,
	        	'n3' => $row->his_n3,
	        	'n4' => $row->his_n4,
	        	'n5' => $row->his_n5,
	        	'n6' => $row->his_n6,
	        	'n7' => $row->his_n7,
	        	'n8' => $row->his_n8,
	        	'n9' => $row->his_n9,
	        	'o1' => $row->his_o1,
	        	'o2' => $row->his_o2,
	        	'o3' => $row->his_o3,
	        	'o4' => $row->his_o4,
	        	'o5' => $row->his_o5,
	        	'o6' => $row->his_o6,
	        	'o7' => $row->his_o7,
	        	'o8' => $row->his_o8,
	        	'o9' => $row->his_o9,
	        	'o10' => $row->his_o10,
	        	'o11' => $row->his_o11
			);
		}
		
		echo json_encode($result);
	}elseif(isset($_POST['get_pat_his'])){
		$usrid = $_POST['get_pat_his'];
        $sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, 
        	history.his_b1,
        	history.his_b2,
        	history.his_b3,
        	history.his_b4,
        	history.his_b5,
        	history.his_b6,
        	history.his_b7,
        	history.his_b8,
        	history.his_b9,
        	history.his_c1,
        	history.his_c2,
        	history.his_c3,
        	history.his_c4,
        	history.his_c5,
        	history.his_c6,
        	history.his_c7,
        	history.his_c8,
        	history.his_c9,
        	history.his_d1,
        	history.his_e1,
        	history.his_e2,
        	history.his_e1_2,
        	history.his_f1,
        	history.his_f2,
        	history.his_f3,
        	history.his_f4,
        	history.his_f5,
        	history.his_f6,
        	history.his_f7,
        	history.his_f8,
        	history.his_f9,
        	history.his_f10,
        	history.his_f11,
        	history.his_f12,
        	history.his_f13,
        	history.his_f14,
        	history.his_f15,
        	history.his_f16,
        	history.his_f17,
        	history.his_f18,
        	history.his_f19,
        	history.his_f20,
        	history.his_f21,
        	history.his_f22,
        	history.his_f23,
        	history.his_f24,
        	history.his_g1,
        	history.his_g2,
        	history.his_g3,
        	history.his_g4,
        	history.his_g5,
        	history.his_g6,
        	history.his_g7,
        	history.his_h1,
        	history.his_h2,
        	history.his_h3,
        	history.his_h4,
        	history.his_h5,
        	history.his_h6,
        	history.his_h7,
        	history.his_h8,
        	history.his_h9,
        	history.his_h10,
        	history.his_i1,
        	history.his_i2,
        	history.his_i3,
        	history.his_i4,
        	history.his_i5,
        	history.his_i6,
        	history.his_i7,
        	history.his_i8,
        	history.his_i9,
        	history.his_i10,
        	history.his_j1,
        	history.his_j2,
        	history.his_j3,
        	history.his_j4,
        	history.his_j5,
        	history.his_j6,
        	history.his_j7,
        	history.his_k1,
        	history.his_k2,
        	history.his_k3,
        	history.his_k1_2,
        	history.his_k2_2,
        	history.his_k3_2,
        	history.his_k1_3,
        	history.his_k2_3,
        	history.his_k3_3,
        	history.his_l1,
        	history.his_l2,
        	history.his_l3,
        	history.his_l4,
        	history.his_l5,
        	history.his_l6,
        	history.his_l7,
        	history.his_l8,
        	history.his_l9,
        	history.his_l10,
        	history.his_l11,
        	history.his_m1,
        	history.his_m2,
        	history.his_m3,
        	history.his_m4,
        	history.his_n1,
        	history.his_n2,
        	history.his_n3,
        	history.his_n4,
        	history.his_n5,
        	history.his_n6,
        	history.his_n7,
        	history.his_n8,
        	history.his_n9,
        	history.his_o1,
        	history.his_o2,
        	history.his_o3,
        	history.his_o4,
        	history.his_o5,
        	history.his_o6,
        	history.his_o7,
        	history.his_o8,
        	history.his_o9,
        	history.his_o10,
        	history.his_o11
        	FROM patient
			INNER JOIN history ON patient.pat_num = history.pat_num WHERE history.pat_num = '$usrid'");

			if ($sql->rowCount()) {
				while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
					if ($row->pat_mname!="") {
						$lname = ucfirst($row->pat_mname).".";
					}else{
						$lname = "";
					}
		
					$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
		
					 $result[] = array(
						'pat_num' => $row->pat_num, 
						'fullname' => $fullname,
						'b1' => $row->his_b1,
						'b2' => $row->his_b2,
						'b3' => $row->his_b3,
						'b4' => $row->his_b4,
						'b5' => $row->his_b5,
						'b6' => $row->his_b6,
						'b7' => $row->his_b7,
						'b8' => $row->his_b8,
						'b9' => $row->his_b9,
						'c1' => $row->his_c1,
						'c2' => $row->his_c2,
						'c3' => $row->his_c3,
						'c4' => $row->his_c4,
						'c5' => $row->his_c5,
						'c6' => $row->his_c6,
						'c7' => $row->his_c7,
						'c8' => $row->his_c8,
						'c9' => $row->his_c9,
						'd1' => $row->his_d1,
						'e1' => $row->his_e1,
						'e2' => $row->his_e2,
						'e1_2' => $row->his_e1_2,
						'f1' => $row->his_f1,
						'f2' => $row->his_f2,
						'f3' => $row->his_f3,
						'f4' => $row->his_f4,
						'f5' => $row->his_f5,
						'f6' => $row->his_f6,
						'f7' => $row->his_f7,
						'f8' => $row->his_f8,
						'f9' => $row->his_f9,
						'f10' => $row->his_f10,
						'f11' => $row->his_f11,
						'f12' => $row->his_f12,
						'f13' => $row->his_f13,
						'f14' => $row->his_f14,
						'f15' => $row->his_f15,
						'f16' => $row->his_f16,
						'f17' => $row->his_f17,
						'f18' => $row->his_f18,
						'f19' => $row->his_f19,
						'f20' => $row->his_f20,
						'f21' => $row->his_f21,
						'f22' => $row->his_f22,
						'f23' => $row->his_f23,
						'f24' => $row->his_f24,
						'g1' => $row->his_g1,
						'g2' => $row->his_g2,
						'g3' => $row->his_g3,
						'g4' => $row->his_g4,
						'g5' => $row->his_g5,
						'g6' => $row->his_g6,
						'g7' => $row->his_g7,
						'h1' => $row->his_h1,
						'h2' => $row->his_h2,
						'h3' => $row->his_h3,
						'h4' => $row->his_h4,
						'h5' => $row->his_h5,
						'h6' => $row->his_h6,
						'h7' => $row->his_h7,
						'h8' => $row->his_h8,
						'h9' => $row->his_h9,
						'h10' => $row->his_h10,
						'i1' => $row->his_i1,
						'i2' => $row->his_i2,
						'i3' => $row->his_i3,
						'i4' => $row->his_i4,
						'i5' => $row->his_i5,
						'i6' => $row->his_i6,
						'i7' => $row->his_i7,
						'i8' => $row->his_i8,
						'i9' => $row->his_i9,
						'i10' => $row->his_i10,
						'j1' => $row->his_j1,
						'j2' => $row->his_j2,
						'j3' => $row->his_j3,
						'j4' => $row->his_j4,
						'j5' => $row->his_j5,
						'j6' => $row->his_j6,
						'j7' => $row->his_j7,
						'k1' => $row->his_k1,
						'k2' => $row->his_k2,
						'k3' => $row->his_k3,
						'k1_2' => $row->his_k1_2,
						'k2_2' => $row->his_k2_2,
						'k3_2' => $row->his_k3_2,
						'k1_3' => $row->his_k1_3,
						'k2_3' => $row->his_k2_3,
						'k3_3' => $row->his_k3_3,
						'l1' => $row->his_l1,
						'l2' => $row->his_l2,
						'l3' => $row->his_l3,
						'l4' => $row->his_l4,
						'l5' => $row->his_l5,
						'l6' => $row->his_l6,
						'l7' => $row->his_l7,
						'l8' => $row->his_l8,
						'l9' => $row->his_l9,
						'l10' => $row->his_l10,
						'l11' => $row->his_l11,
						'm1' => $row->his_m1,
						'm2' => $row->his_m2,
						'm3' => $row->his_m3,
						'm4' => $row->his_m4,
						'n1' => $row->his_n1,
						'n2' => $row->his_n2,
						'n3' => $row->his_n3,
						'n4' => $row->his_n4,
						'n5' => $row->his_n5,
						'n6' => $row->his_n6,
						'n7' => $row->his_n7,
						'n8' => $row->his_n8,
						'n9' => $row->his_n9,
						'o1' => $row->his_o1,
						'o2' => $row->his_o2,
						'o3' => $row->his_o3,
						'o4' => $row->his_o4,
						'o5' => $row->his_o5,
						'o6' => $row->his_o6,
						'o7' => $row->his_o7,
						'o8' => $row->his_o8,
						'o9' => $row->his_o9,
						'o10' => $row->his_o10,
						'o11' => $row->his_o11
					);
				}
				
				echo json_encode($result);
			}else{
				echo 0;   
			}

	}elseif (isset($_POST['del'])) {

        $usrid = $_POST['usr'];

        $sql = $handler->prepare("DELETE FROM history WHERE pat_num = :usr");
        $sql->execute(array('usr'=>$usrid));

		echo 1;

	}else{
		$result = "";
		$sql = $handler->query("SELECT patient.pat_num, patient.pat_fname, patient.pat_mname, patient.pat_lname, history.his_indate FROM patient
			INNER JOIN history ON patient.pat_num = history.pat_num ORDER BY history.his_indate DESC");

		while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
			if ($row->pat_mname!="") {
				$lname = ucfirst($row->pat_mname).".";
			}else{
				$lname = "";
			}

			$fullname = ucfirst($row->pat_fname)." ".$lname." ".ucfirst($row->pat_lname);
			$dateCre = date_create($row->his_indate);
			$date = date_format($dateCre, 'M. d, Y | h:i a');

			 $result[] = array(
				'pat_num' => $row->pat_num, 
				'fullname' => $fullname,
				'indate' => $date
			);
		}
		
		echo json_encode($result);
	}
?>