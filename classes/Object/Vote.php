<?php
/**
 * CampFire Manager is a scheduling tool predominently used at BarCamps to 
 * schedule talks based, mainly, on the number of people attending each talk
 * receives.
 *
 * PHP version 5
 *
 * @category Default
 * @package  CampFireManager2
 * @author   Jon Spriggs <jon@sprig.gs>
 * @license  http://www.gnu.org/licenses/agpl.html AGPLv3
 * @link     https://github.com/JonTheNiceGuy/cfm2 Version Control Service
 */
/**
 * This class defines the object for PDO to use when retrives data about a Vote.
 * 
 * @category Object_Vote
 * @package  CampFireManager2
 * @author   Jon Spriggs <jon@sprig.gs>
 * @license  http://www.gnu.org/licenses/agpl.html AGPLv3
 * @link     https://github.com/JonTheNiceGuy/cfm2 Version Control Service
 */

class Object_Vote extends Base_GenericObject
{
    // Generic Object Requirements
    protected $arrDBItems = array(
    	'intUserID' => array('type' => 'integer', 'length' => 11, 'unique' => true),
        'intTalkID' => array('type' => 'integer', 'length' => 11, 'unique' => true),
        'lastChange' => array('type' => 'datetime')
    );
    protected $strDBTable = "vote";
    protected $strDBKeyCol = "intVoteID";
    protected $mustBeCreatorToModify = true;
    // Local Object Requirements
    protected $intVoteID = null;
    protected $intUserID = null;
    protected $intTalkID = null;
    protected $lastChange = null;
}

/**
 * This class defines some default and demo data for the use in demos.
 * 
 * @category Object_Vote
 * @package  CampFireManager2
 * @author   Jon Spriggs <jon@sprig.gs>
 * @license  http://www.gnu.org/licenses/agpl.html AGPLv3
 * @link     https://github.com/JonTheNiceGuy/cfm2 Version Control Service
 */
class Object_Vote_Demo extends Object_Vote
{
    protected $arrDemoData = array(
        array('intVoteID' => 1, 'intUserID' => '2', 'intTalkID' => '1'),
        array('intVoteID' => 2, 'intUserID' => '3', 'intTalkID' => '1'),
        array('intVoteID' => 3, 'intUserID' => '4', 'intTalkID' => '1')
    );
}