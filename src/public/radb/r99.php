
<?php
    include('config.php'); 


    function applyMasks($a,$b,$c) {
        $a &= $c;
        $a |= $b;
        return str_pad(decbin($a),8,"0",STR_PAD_LEFT);
    }

    function getBin($a) {
        return str_pad(decbin($a),8,"0",STR_PAD_LEFT);
    }

  function readByte($position,$string) {
    $position*=2;
	$answer=substr($string,$position,2);  // returns "abcde"
    return hexdec($answer);
  }

  function readInt($position,$string) {
    $position*=2;
    $answer="";

    // Read first byte
	$answer1=substr($string,$position+2,2);  // returns "abcde"
	$answer2=substr($string,$position,2);  // returns "abcde"
	$answer=$answer1 . $answer2;
    $answer=hexdec($answer);

    // handle negatives
    if ($answer>65536/2)
      $answer-=65536;

    return $answer;
  }

	 $xml = new SimpleXMLElement($GLOBALS['AllCache'], null, true);

echo $xml;

foreach($xml as $key => $value)
{
    echo $key . "=" . $value . "\n";
}


  $R=$xml->{'R'};
  $RBIN=getBin($R);
  $RON=$xml->{'RON'};
  $ROFF=$xml->{'ROFF'};
  $RMASK=applyMasks($xml->{'R'},$xml->{'RON'},$xml->{'ROFF'});
  $relay1val=$RBIN[7];
  $relay2val=$RBIN[6];
  $relay3val=$RBIN[5];
  $relay4val=$RBIN[4];
  $relay5val=$RBIN[3];
  $relay6val=$RBIN[2];
  $relay7val=$RBIN[1];
  $relay8val=$RBIN[0];
  $relay1status=$RMASK[7];
  $relay2status=$RMASK[6];
  $relay3status=$RMASK[5];
  $relay4status=$RMASK[4];
  $relay5status=$RMASK[3];
  $relay6status=$RMASK[2];
  $relay7status=$RMASK[1];
  $relay8status=$RMASK[0];

  $R1=$xml->{'R1'};
  $R1BIN=getBin($R1);
  $RON1=$xml->{'RON1'};
  $ROFF1=$xml->{'ROFF1'};
  $RMASK1=applyMasks($xml->{'R1'},$xml->{'RON1'},$xml->{'ROFF1'});
  $relay11val=$R1BIN[7];
  $relay12val=$R1BIN[6];
  $relay13val=$R1BIN[5];
  $relay14val=$R1BIN[4];
  $relay15val=$R1BIN[3];
  $relay16val=$R1BIN[2];
  $relay17val=$R1BIN[1];
  $relay18val=$R1BIN[0];
  $relay11status=$RMASK1[7];
  $relay12status=$RMASK1[6];
  $relay13status=$RMASK1[5];
  $relay14status=$RMASK1[4];
  $relay15status=$RMASK1[3];
  $relay16status=$RMASK1[2];
  $relay17status=$RMASK1[1];
  $relay18status=$RMASK1[0];

  $R2=$xml->{'R2'};
  $R2BIN=getBin($R2);
  $RON2=$xml->{'RON2'};
  $ROFF2=$xml->{'ROFF2'};
  $RMASK2=applyMasks($xml->{'R2'},$xml->{'RON2'},$xml->{'ROFF2'});
  $relay21val=$R2BIN[7];
  $relay22val=$R2BIN[6];
  $relay23val=$R2BIN[5];
  $relay24val=$R2BIN[4];
  $relay25val=$R2BIN[3];
  $relay26val=$R2BIN[2];
  $relay27val=$R2BIN[1];
  $relay28val=$R2BIN[0];
  $relay21status=$RMASK2[7];
  $relay22status=$RMASK2[6];
  $relay23status=$RMASK2[5];
  $relay24status=$RMASK2[4];
  $relay25status=$RMASK2[3];
  $relay26status=$RMASK2[2];
  $relay27status=$RMASK2[1];
  $relay28status=$RMASK2[0];

  $R3=$xml->{'R3'};
  $R3BIN=getBin($R3);
  $RON3=$xml->{'RON3'};
  $ROFF3=$xml->{'ROFF3'};
  $RMASK3=applyMasks($xml->{'R3'},$xml->{'RON3'},$xml->{'ROFF3'});
  $relay31val=$R3BIN[7];
  $relay32val=$R3BIN[6];
  $relay33val=$R3BIN[5];
  $relay34val=$R3BIN[4];
  $relay35val=$R3BIN[3];
  $relay36val=$R3BIN[2];
  $relay37val=$R3BIN[1];
  $relay38val=$R3BIN[0];
  $relay31status=$RMASK3[7];
  $relay32status=$RMASK3[6];
  $relay33status=$RMASK3[5];
  $relay34status=$RMASK3[4];
  $relay35status=$RMASK3[3];
  $relay36status=$RMASK3[2];
  $relay37status=$RMASK3[1];
  $relay38status=$RMASK3[0];

  $R4=$xml->{'R4'};
  $R4BIN=getBin($R4);
  $RON4=$xml->{'RON4'};
  $ROFF4=$xml->{'ROFF4'};
  $RMASK4=applyMasks($xml->{'R4'},$xml->{'RON4'},$xml->{'ROFF4'});
  $relay41val=$R4BIN[7];
  $relay42val=$R4BIN[6];
  $relay43val=$R4BIN[5];
  $relay44val=$R4BIN[4];
  $relay45val=$R4BIN[3];
  $relay46val=$R4BIN[2];
  $relay47val=$R4BIN[1];
  $relay48val=$R4BIN[0];
  $relay41status=$RMASK4[7];
  $relay42status=$RMASK4[6];
  $relay43status=$RMASK4[5];
  $relay44status=$RMASK4[4];
  $relay45status=$RMASK4[3];
  $relay46status=$RMASK4[2];
  $relay47status=$RMASK4[1];
  $relay48status=$RMASK4[0];

  $R5=$xml->{'R5'};
  $R5BIN=getBin($R5);
  $RON5=$xml->{'RON5'};
  $ROFF5=$xml->{'ROFF5'};
  $RMASK5=applyMasks($xml->{'R5'},$xml->{'RON5'},$xml->{'ROFF5'});
  $relay51val=$R5BIN[7];
  $relay52val=$R5BIN[6];
  $relay53val=$R5BIN[5];
  $relay54val=$R5BIN[4];
  $relay55val=$R5BIN[3];
  $relay56val=$R5BIN[2];
  $relay57val=$R5BIN[1];
  $relay58val=$R5BIN[0];
  $relay51status=$RMASK5[7];
  $relay52status=$RMASK5[6];
  $relay53status=$RMASK5[5];
  $relay54status=$RMASK5[4];
  $relay55status=$RMASK5[3];
  $relay56status=$RMASK5[2];
  $relay57status=$RMASK5[1];
  $relay58status=$RMASK5[0];

  echo "R1=" . $relay1status . "\n";
  echo "R2=" . $relay2status . "\n";
  echo "R3=" . $relay3status . "\n";
  echo "R4=" . $relay4status . "\n";
  echo "R5=" . $relay5status . "\n";
  echo "R6=" . $relay6status . "\n";
  echo "R7=" . $relay7status . "\n";
  echo "R8=" . $relay8status . "\n";

  echo "R11=" . $relay11status . "\n";
  echo "R12=" . $relay12status . "\n";
  echo "R13=" . $relay13status . "\n";
  echo "R14=" . $relay14status . "\n";
  echo "R15=" . $relay15status . "\n";
  echo "R16=" . $relay16status . "\n";
  echo "R17=" . $relay17status . "\n";
  echo "R18=" . $relay18status . "\n";

  echo "R21=" . $relay21status . "\n";
  echo "R22=" . $relay22status . "\n";
  echo "R23=" . $relay23status . "\n";
  echo "R24=" . $relay24status . "\n";
  echo "R25=" . $relay25status . "\n";
  echo "R26=" . $relay26status . "\n";
  echo "R27=" . $relay27status . "\n";
  echo "R28=" . $relay28status . "\n";

  echo "R31=" . $relay31status . "\n";
  echo "R32=" . $relay32status . "\n";
  echo "R33=" . $relay33status . "\n";
  echo "R34=" . $relay34status . "\n";
  echo "R35=" . $relay35status . "\n";
  echo "R36=" . $relay36status . "\n";
  echo "R37=" . $relay37status . "\n";
  echo "R38=" . $relay38status . "\n";

  echo "R41=" . $relay41status . "\n";
  echo "R42=" . $relay42status . "\n";
  echo "R43=" . $relay43status . "\n";
  echo "R44=" . $relay44status . "\n";
  echo "R45=" . $relay45status . "\n";
  echo "R46=" . $relay46status . "\n";
  echo "R47=" . $relay47status . "\n";
  echo "R48=" . $relay48status . "\n";

  echo "R51=" . $relay51status . "\n";
  echo "R52=" . $relay52status . "\n";
  echo "R53=" . $relay53status . "\n";
  echo "R54=" . $relay54status . "\n";
  echo "R55=" . $relay55status . "\n";
  echo "R56=" . $relay56status . "\n";
  echo "R57=" . $relay57status . "\n";
  echo "R58=" . $relay58status . "\n";

  $ra_mem_full = $xml->{'MEM'};

$FullVarsStart=100;
echo "Mem_B_MoonOffset=" . readByte(100-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_Vacation=" . readByte(101-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AutoFeed=" . readByte(102-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AutoFeedPress=" . readByte(103-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AutoFeedRepeat=" . readByte(104-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AutoFeedOffset=" . readByte(105-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_WCFillTime=" . readInt(106-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_Latitude=" . readInt(108-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_Longitude=" . readInt(110-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AcclRiseOffset=" . readByte(112-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AcclSetOffset=" . readByte(113-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AcclDay=" . readByte(114-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_SwabbieRepeat=" . readByte(115-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_SwabbieTime=" . readByte(116-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_TideMin=" . readByte(117-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_TideMax=" . readByte(118-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_PumpOffset=" . readByte(119-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_FeedingRF=" . readByte(120-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NightRF=" . readByte(121-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NightSpeed=" . readByte(122-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NightDuration=" . readByte(123-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NTMSpeed=" . readByte(124-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NTMDuration=" . readByte(125-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NTMDelay=" . readByte(126-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_NTMTime=" . readByte(127-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP1Vol=" . readInt(128-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP1Time=" . readInt(130-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_DP1Volume=" . readInt(132-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP2Vol=" . readInt(134-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP2Time=" . readInt(136-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_DP2Volume=" . readInt(138-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_LogATO=" . readByte(140-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_LogPrevATO=" . readByte(141-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_RateAlarm=" . readByte(142-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_TideMode=" . readByte(143-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintGAC=" . readByte(144-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintGFO=" . readByte(145-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintCal=" . readByte(146-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintAlk=" . readByte(147-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintWC=" . readByte(148-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintATO=" . readByte(149-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintFeeding=" . readByte(150-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintSkimmer=" . readByte(151-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintSocks=" . readByte(152-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MainWCVol=" . readByte(153-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP3Vol=" . readInt(154-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_CalDP3Time=" . readInt(156-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_DP3Volume=" . readInt(158-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_LightMode=" . readByte(160-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_LightOffset=" . readByte(161-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_RiseOffset=" . readInt(162-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_SetOffset=" . readInt(164-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AcclActinicOffset=" . readByte(166-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AcclDaylightOffset=" . readByte(167-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_RandomMode=" . readByte(168-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_GyreOffset=" . readByte(169-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MoonMode=" . readByte(170-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_LightsOffPerc=" . readByte(171-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_FeedingSpeed=" . readByte(172-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_WCSpeed=" . readByte(173-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_AlkTarget=" . readByte(174-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_PowerOutageSpeed=" . readByte(175-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_VinegarWeek=" . readByte(176-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MaintVinegar=" . readByte(177-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_EnableStorm=" . readByte(178-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_ForceRandomTide=" . readByte(179-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_AWCTime=" . readInt(180-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_AWCFrequency=" . readInt(182-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_AWCOffset=" . readInt(184-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_MixTime=" . readInt(186-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_I_MixFrequency=" . readInt(188-$FullVarsStart,$ra_mem_full) . "\n";
echo "Mem_B_FlushTime=" . readByte(190-$FullVarsStart,$ra_mem_full) . "\n";

echo "Mem_B_ResetMemory=" . readByte(199-$FullVarsStart,$ra_mem_full) . "\n";
$FullVarsEnd=200;

$VarsStart=100; // correct for php file
echo "Mem_B_MHOnHour=" . readByte($VarsStart,$ra_mem_full) . "\n";
echo "Mem_B_MHOnMinute=" . readByte($VarsStart+1,$ra_mem_full) . "\n";
echo "Mem_B_MHOffHour=" . readByte($VarsStart+2,$ra_mem_full) . "\n";
echo "Mem_B_MHOffMinute=" . readByte($VarsStart+3,$ra_mem_full) . "\n";
echo "Mem_B_StdLightsOnHour=" . readByte($VarsStart+4,$ra_mem_full) . "\n";
echo "Mem_B_StdLightsOnMinute=" . readByte($VarsStart+5,$ra_mem_full) . "\n";
echo "Mem_B_StdLightsOffHour=" . readByte($VarsStart+6,$ra_mem_full) . "\n";
echo "Mem_B_StdLightsOffMinute=" . readByte($VarsStart+7,$ra_mem_full) . "\n";
echo "Mem_I_WM1Timer=" . readInt($VarsStart+8,$ra_mem_full) . "\n";
echo "Mem_I_WM2Timer=" . readInt($VarsStart+10,$ra_mem_full) . "\n";
echo "Mem_B_DP1Timer=" . readByte($VarsStart+12,$ra_mem_full) . "\n";
echo "Mem_B_DP2Timer=" . readByte($VarsStart+13,$ra_mem_full) . "\n";
echo "Mem_I_FeedingTimer=" . readInt($VarsStart+14,$ra_mem_full) . "\n";
echo "Mem_I_LCDTimer=" . readInt($VarsStart+16,$ra_mem_full) . "\n";
echo "Mem_I_OverheatTemp=" . readInt($VarsStart+18,$ra_mem_full) . "\n";
echo "Mem_B_LEDPWMDaylight=" . readByte($VarsStart+20,$ra_mem_full) . "\n";
echo "Mem_B_LEDPWMActinic=" . readByte($VarsStart+21,$ra_mem_full) . "\n";
echo "Mem_I_HeaterTempOn=" . readInt($VarsStart+22,$ra_mem_full) . "\n";
echo "Mem_I_HeaterTempOff=" . readInt($VarsStart+24,$ra_mem_full) . "\n";
echo "Mem_I_ChillerTempOn=" . readInt($VarsStart+26,$ra_mem_full) . "\n";
echo "Mem_I_ChillerTempOff=" . readInt($VarsStart+28,$ra_mem_full) . "\n";
echo "Mem_B_ATOTimeout=" . readByte($VarsStart+30,$ra_mem_full) . "\n";
echo "Mem_I_PHMax=" . readInt($VarsStart+31,$ra_mem_full) . "\n";
echo "Mem_I_PHMin=" . readInt($VarsStart+33,$ra_mem_full) . "\n";
echo "Mem_B_MHDelay=" . readByte($VarsStart+35,$ra_mem_full) . "\n";
echo "Mem_B_DP1OnHour=" . readByte($VarsStart+36,$ra_mem_full) . "\n";
echo "Mem_B_DP1OnMinute=" . readByte($VarsStart+37,$ra_mem_full) . "\n";
echo "Mem_B_DP2OnHour=" . readByte($VarsStart+38,$ra_mem_full) . "\n";
echo "Mem_B_DP2OnMinute=" . readByte($VarsStart+39,$ra_mem_full) . "\n";
echo "Mem_B_ATOHourInterval=" . readByte($VarsStart+40,$ra_mem_full) . "\n";
echo "Mem_B_ATOHighHourInterval=" . readByte($VarsStart+41,$ra_mem_full) . "\n";
echo "Mem_B_ATOHighTimeout=" . readByte($VarsStart+42,$ra_mem_full) . "\n";
echo "Mem_I_DP1RepeatInterval=" . readInt($VarsStart+43,$ra_mem_full) . "\n";
echo "Mem_I_DP2RepeatInterval=" . readInt($VarsStart+45,$ra_mem_full) . "\n";
echo "Mem_I_SalMax=" . readInt($VarsStart+47,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStartD=" . readByte($VarsStart+49,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEndD=" . readByte($VarsStart+50,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDurationD=" . readByte($VarsStart+51,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStartA=" . readByte($VarsStart+52,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEndA=" . readByte($VarsStart+53,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDurationA=" . readByte($VarsStart+54,$ra_mem_full) . "\n";
echo "Mem_B_RFMode=" . readByte($VarsStart+55,$ra_mem_full) . "\n";
echo "Mem_B_RFSpeed=" . readByte($VarsStart+56,$ra_mem_full) . "\n";
echo "Mem_B_RFDuration=" . readByte($VarsStart+57,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart0=" . readByte($VarsStart+58,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd0=" . readByte($VarsStart+59,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration0=" . readByte($VarsStart+60,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart1=" . readByte($VarsStart+61,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd1=" . readByte($VarsStart+62,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration1=" . readByte($VarsStart+63,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart2=" . readByte($VarsStart+64,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd2=" . readByte($VarsStart+65,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration2=" . readByte($VarsStart+66,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart3=" . readByte($VarsStart+67,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd3=" . readByte($VarsStart+68,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration3=" . readByte($VarsStart+69,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart4=" . readByte($VarsStart+70,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd4=" . readByte($VarsStart+71,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration4=" . readByte($VarsStart+72,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStart5=" . readByte($VarsStart+73,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEnd5=" . readByte($VarsStart+74,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDuration5=" . readByte($VarsStart+75,$ra_mem_full) . "\n";
echo "Mem_I_ATOExtendedTimeout=" . readInt($VarsStart+76,$ra_mem_full) . "\n";
echo "Mem_I_ATOHighExtendedTimeout=" . readInt($VarsStart+78,$ra_mem_full) . "\n";
echo "Mem_I_ORPMin=" . readInt($VarsStart+80,$ra_mem_full) . "\n";
echo "Mem_I_ORPMax=" . readInt($VarsStart+82,$ra_mem_full) . "\n";
echo "Mem_B_ActinicOffset=" . readByte($VarsStart+84,$ra_mem_full) . "\n";
echo "Mem_I_CO2ControlOn=" . readInt($VarsStart+85,$ra_mem_full) . "\n";
echo "Mem_I_CO2ControlOff=" . readInt($VarsStart+87,$ra_mem_full) . "\n";
echo "Mem_I_PHControlOn=" . readInt($VarsStart+89,$ra_mem_full) . "\n";
echo "Mem_I_PHControlOff=" . readInt($VarsStart+91,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeStartW=" . readByte($VarsStart+93,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeEndW=" . readByte($VarsStart+94,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeDurationW=" . readByte($VarsStart+95,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeStartB=" . readByte($VarsStart+96,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeEndB=" . readByte($VarsStart+97,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeDurationB=" . readByte($VarsStart+98,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeStartRB=" . readByte($VarsStart+99,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeEndRB=" . readByte($VarsStart+100,$ra_mem_full) . "\n";
echo "Mem_B_AISlopeDurationRB=" . readByte($VarsStart+101,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartW=" . readByte($VarsStart+102,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndW=" . readByte($VarsStart+103,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationW=" . readByte($VarsStart+104,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartRB=" . readByte($VarsStart+105,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndRB=" . readByte($VarsStart+106,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationRB=" . readByte($VarsStart+107,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartR=" . readByte($VarsStart+108,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndR=" . readByte($VarsStart+109,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationR=" . readByte($VarsStart+110,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartG=" . readByte($VarsStart+111,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndG=" . readByte($VarsStart+112,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationG=" . readByte($VarsStart+113,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartB=" . readByte($VarsStart+114,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndB=" . readByte($VarsStart+115,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationB=" . readByte($VarsStart+116,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeStartI=" . readByte($VarsStart+117,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeEndI=" . readByte($VarsStart+118,$ra_mem_full) . "\n";
echo "Mem_B_RadionSlopeDurationI=" . readByte($VarsStart+119,$ra_mem_full) . "\n";
echo "Mem_B_DelayedStart=" . readByte($VarsStart+120,$ra_mem_full) . "\n";
echo "Mem_I_PHExpMin=" . readInt($VarsStart+121,$ra_mem_full) . "\n";
echo "Mem_I_PHExpMax=" . readInt($VarsStart+123,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevelMin=" . readInt($VarsStart+125,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevelMax=" . readInt($VarsStart+127,$ra_mem_full) . "\n";
echo "Mem_I_SalTempComp=" . readInt($VarsStart+129,$ra_mem_full) . "\n";
echo "Mem_B_WaterLevelLow=" . readByte($VarsStart+131,$ra_mem_full) . "\n";
echo "Mem_B_WaterLevelHigh=" . readByte($VarsStart+132,$ra_mem_full) . "\n";
echo "Mem_B_DP3Timer=" . readByte($VarsStart+133,$ra_mem_full) . "\n";
echo "Mem_I_DP3RepeatInterval=" . readInt($VarsStart+134,$ra_mem_full) . "\n";
echo "Mem_B_LCDID=" . readByte($VarsStart+136,$ra_mem_full) . "\n";
echo "Mem_B_DCPumpMode=" . readByte($VarsStart+137,$ra_mem_full) . "\n";
echo "Mem_B_DCPumpSpeed=" . readByte($VarsStart+138,$ra_mem_full) . "\n";
echo "Mem_B_DCPumpDuration=" . readByte($VarsStart+139,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel1Min=" . readInt($VarsStart+140,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel1Max=" . readInt($VarsStart+142,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel2Min=" . readInt($VarsStart+144,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel2Max=" . readInt($VarsStart+146,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel3Min=" . readInt($VarsStart+148,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel3Max=" . readInt($VarsStart+150,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel4Min=" . readInt($VarsStart+152,$ra_mem_full) . "\n";
echo "Mem_I_WaterLevel4Max=" . readInt($VarsStart+154,$ra_mem_full) . "\n";
echo "Mem_B_LEDPWMDaylight2=" . readByte($VarsStart+156,$ra_mem_full) . "\n";
echo "Mem_B_LEDPWMActinic2=" . readByte($VarsStart+157,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStartD2=" . readByte($VarsStart+158,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEndD2=" . readByte($VarsStart+159,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDurationD2=" . readByte($VarsStart+160,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeStartA2=" . readByte($VarsStart+161,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeEndA2=" . readByte($VarsStart+162,$ra_mem_full) . "\n";
echo "Mem_B_PWMSlopeDurationA2=" . readByte($VarsStart+163,$ra_mem_full) . "\n";
echo "Mem_B_DCPumpThreshold=" . readByte($VarsStart+164,$ra_mem_full) . "\n";
echo "Mem_I_PHEControlOn=" . readInt($VarsStart+165,$ra_mem_full) . "\n";
echo "Mem_I_PHEControlOff=" . readInt($VarsStart+167,$ra_mem_full) . "\n";
echo "Mem_B_TestMode=" . readInt($VarsStart+169,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion0Decimal=" . readInt($VarsStart+170,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion1Decimal=" . readInt($VarsStart+171,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion2Decimal=" . readInt($VarsStart+172,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion3Decimal=" . readInt($VarsStart+173,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion4Decimal=" . readInt($VarsStart+174,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion5Decimal=" . readInt($VarsStart+175,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion6Decimal=" . readInt($VarsStart+176,$ra_mem_full) . "\n";
echo "Mem_B_CustomExpansion7Decimal=" . readInt($VarsStart+177,$ra_mem_full) . "\n";
echo "Mem_B_Touch_Orientation=" . readInt($VarsStart+178,$ra_mem_full) . "\n";
$VarsEnd=$VarsStart+179;
?>

