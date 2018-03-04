<?php
	/**
	* 
	*/
	class Logic
	{
		private $answer = [];


		function q1 ()
		{
			return $this->answer[0];
		}

		function q2()
		{
			if (($this->answer[1]==1&&$this->answer[4]==3)||($this->answer[1]==2&&$this->answer[4]==4)||($this->answer[1]==3&&$this->answer[4]==1)||($this->answer[1]==4&&$this->answer[4]==2)) {
				return true;	
			}else{
				return false;
			}
		}

		function q3()
		{
			if ($this->answer[2]==1&&$this->answer[2]!=$this->answer[5]&&$this->answer[2]!=$this->answer[1]&&$this->answer[2]!=$this->answer[3]) {
				return true;
			} else if ($this->answer[2]==2&&$this->answer[5]!=$this->answer[2]&&$this->answer[5]!=$this->answer[1]&&$this->answer[5]!=$this->answer[3]) {
				return true;
			} else if ($this->answer[2]==3&&$this->answer[1]!=$this->answer[2]&&$this->answer[1]!=$this->answer[5]&&$this->answer[1]!=$this->answer[3]) {
				return true;
			} else if ($this->answer[2]==4&&$this->answer[3]!=$this->answer[2]&&$this->answer[3]!=$this->answer[5]&&$this->answer[3]!=$this->answer[1]) {
				return true;
			} else {
				return false;
			}
		}

		function q4()
		{
			if ($this->answer[3]==1&&$this->answer[0]==$this->answer[4]) {
				return true;
			} else if ($this->answer[3]==2&&$this->answer[1]==$this->answer[6]) {
				return true;
			} else if ($this->answer[3]==3&&$this->answer[0]==$this->answer[8]) {
				return true;
			} else if ($this->answer[3]==4&&$this->answer[5]==$this->answer[9]) {
				return true;
			} else {
				return false;
			}
		}

		function q5()
		{
			if ($this->answer[4]==1&&$this->answer[7]==1) {
				return true;
			} else if ($this->answer[4]==2&&$this->answer[3]==2) {
				return true;
			} else if ($this->answer[4]==3&&$this->answer[8]==3) {
				return true;
			} else if ($this->answer[4]==4&&$this->answer[6]==4) {
				return true;
			} else {
				return false;
			}
		}

		function q6()
		{
			if ($this->answer[5]==1&&$this->answer[7]==$this->answer[1]&&$this->answer[7]==$this->answer[3]) {
				return true;
			} else if ($this->answer[5]==2&&$this->answer[7]==$this->answer[0]&&$this->answer[7]==$this->answer[5]) {
				return true;
			} else if ($this->answer[5]==3&&$this->answer[7]==$this->answer[2]&&$this->answer[7]==$this->answer[9]) {
				return true;
			} else if ($this->answer[5]==3&&$this->answer[7]==$this->answer[4]&&$this->answer[7]==$this->answer[8]) {
				return true;
			} else {
				return false;
			}
		}

		function q7()
		{
			$answer = array_count_values($this->answer);
			$sk = ['key'=>'','value'=>11];
			foreach ($answer as $key => $value) {
				if ($value<$sk['value']) {
					$sk['value'] = $value;
					$sk['key'] = $key;
				}
			}
			$key = $sk['key'];
			
			if ($this->answer[6]==1&&$key==3) {
				return true;
			} else if ($this->answer[6]==2&&$key==2) {
				return true;
			} else if ($this->answer[6]==3&&$key==1) {
				return true;
			} else if ($this->answer[6]==4&&$key==4) {
				return true;
			} else {
				return false;
			}
		}

		function q8()
		{
			if ($this->answer[7]==1&&$this->q81(6)) {
				return true;
			} else if ($this->answer[7]==2&&$this->q81(4)) {
				return true;
			} else if ($this->answer[7]==3&&$this->q81(1)) {
				return true;
			} else if ($this->answer[7]==4&&$this->q81(9)) {
				return true;
			} else {
				return false;
			}
		}

		function q81($n)
		{
			if ($this->answer[0]==1&&$this->answer[$n]!=2) {
				return true;
			} else if ($this->answer[0]==2&&$this->answer[$n]!=1&&$this->answer[$n]!=3) {
				return true;
			} else if ($this->answer[0]==3&&$this->answer[$n]!=2&&$this->answer[$n]!=4) {
				return true;
			} else if ($this->answer[0]==4&&$this->answer[$n]!=3) {
				return true;
			}
		}

		function q9()
		{
			if ($this->answer[8]==1&&(($this->answer[0]==$this->answer[5]&&$this->answer[5]!=$this->answer[4])||($this->answer[0]!=$this->answer[5]&&$this->answer[5]==$this->answer[4]))) {
				return true;
			} else if ($this->answer[8]==2&&(($this->answer[0]==$this->answer[5]&&$this->answer[9]!=$this->answer[4])||($this->answer[0]!=$this->answer[5]&&$this->answer[9]==$this->answer[4]))) {
				return true;
			} else if ($this->answer[8]==1&&(($this->answer[0]==$this->answer[5]&&$this->answer[1]!=$this->answer[4])||($this->answer[0]!=$this->answer[5]&&$this->answer[1]==$this->answer[4]))) {
				return true;
			} else if ($this->answer[8]==1&&(($this->answer[0]==$this->answer[5]&&$this->answer[8]!=$this->answer[4])||($this->answer[0]!=$this->answer[5]&&$this->answer[8]==$this->answer[4]))) {
				return true;
			} else {
				return false;
			}
		}

		function q10()
		{
			$answer = array_count_values($this->answer);
			$ans = sort($answer);
			$answer = array_merge($answer);
			$diff = $answer[3]-$answer[0];
			if ($this->answer[9]==1&&$diff==3) {
				return true;
			} else if ($this->answer[9]==2&&$diff==2) {
				return true;
			} else if ($this->answer[9]==3&&$diff==4) {
				return true;
			} else if ($this->answer[9]==4&&$diff==1) {
				return true;
			} else {
				return false;
			}
		}

		function run()
		{
			for ($i=1111111111; $i <=4444444444; $i++) { 
				echo $i;
				$str = (string)$i;  // 将int型转换成string

				$this->answer = str_split($str);
				if (in_array(['0','5','6','7','8','9'], $this->answer)) {
					continue;
				}
				if (!$this->q1()) {
					echo 1;
					continue;
				} else if (!$this->q2()) {
					echo 2;
					continue;
				} else if (!$this->q3()) {
					echo 3;
					continue;
				} else if (!$this->q4()) {
					echo 4;
					continue;
				} else if (!$this->q5()) {
					echo 5;
					continue;
				} else if (!$this->q6()) {
					echo 6;
					continue;
				} else if (!$this->q7()) {
					echo 7;
					continue;
				} else if (!$this->q8()) {
					echo 8;
					continue;
				} else if (!$this->q9()) {
					continue;
				} else if (!$this->q10()) {
					continue;
				} else {
					var_dump($this->answer);
					exit();
				}
			}
		}
	}

	$logic = new Logic();

	$logic->run();