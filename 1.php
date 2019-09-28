<?php
		
	$Bio = new stdClass();	//the variable must be declare to an object, not a null or a value.
	$Bio->name 			= "Saidah Manshuroh";
	$Bio->age 			= 22;
	$Bio->address		= "Jl. Gebang Kidul No. 17 Kec. Sukolilo Kota Surabaya, 60117";
	$Bio->hobbies		= array("Menulis Puisi", "Menatap Langit");
	$Bio->is_married	= false;
	//$Bio->list_school	= (["a":"as", "s":"sa"]);
	
	Class SchoolID
	{
		public $name;
		public $year_in;
		public $year_out;
		public $major;	//if any, if no set "null"
	}
	
	$school = new SchoolID();
	$school->name			= "SDN 1 Kamasan";
	$school->year_in		= "2003";
	$school->year_out		= "2009";
	$school->major			= "null";
	$Bio->list_school[0]	= $school;
	
	$school = new SchoolID();
	$school->name			= "SMPN 2 Banjaran";
	$school->year_in		= "2009";
	$school->year_out		= "2012";
	$school->major			= "null";
	$Bio->list_school[1]	= $school;
	
	$school = new SchoolID();	
	$school->name			= "SMAN 1 Singaparna";
	$school->year_in		= "2012";
	$school->year_out		= "2015";
	$school->major			= "IPA";
	$Bio->list_school[2]	= $school;
	
	$school= new SchoolID();	
	$school->name			= "Politeknik Elektronika Negeri Surabaya";
	$school->year_in		= "2015";
	$school->year_out		= "2019";
	$school->major			= "D4 Teknik Telekomunikasi";
	$Bio->list_school[3]	= $school;
	
	Class Skill
	{
		public $skill_name;
		public $level;		//beginner,advanced,expert
	}
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "PHP";
	$mySkill->level			= "Beginner";
	$Bio->skills[0]			= $mySkill;
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "JavaScript";
	$mySkill->level			= "Beginner";
	$Bio->skills[1]			= $mySkill;
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "HTML";
	$mySkill->level			= "Beginner";
	$Bio->skills[2]			= $mySkill;
	
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "CSS";
	$mySkill->level			= "Beginner";
	$Bio->skills[3]			= $mySkill;
	
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "C++";
	$mySkill->level			= "Beginner";
	$Bio->skills[4]			= $mySkill;
	
	$mySkill = new Skill();
	$mySkill->skill_name	= "Cisco Packet Tracer";
	$mySkill->level			= "Beginner";
	$Bio->skills[5]			= $mySkill;
	
	$Bio->interest_in_coding = true;
	$myBio = json_encode($Bio);
	
	echo $myBio;

?>
