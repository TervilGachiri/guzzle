<?php

namespace Models;

use Models\Base\Staff as BaseStaff;

/**
 * Skeleton subclass for representing a row from the 'staff' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 */
class Staff extends BaseStaff
{

    /**
     * A method that return the full name and title
     * e.g MissSharleen Wangui 
     */

    public function getFullName()
    {
        return $this->getSanitizedTitleAndFirstName() . ' ' . $this->lname;
    }

    /**
     * //$this->fname
     * MissSharleen --Miss . Sharleen
     * DrJotham -- Dr . Jotham
     * @return string
     * example Miss . Sharleen 
     */
    public function getSanitizedTitleAndFirstName()
    {

        //get the firstname e.g MissSharleen
        $titleAndFirstName = $this->fname;

        //get the position of the second capital letter in the firstname e.g 4
        //strcspn -> Find length of initial segment not matching mask
        //echo strcspn('wanjau','abwcd');//0
        //echo strcspn('wanjau','abwcd');//1
        // echo strcspn('wanjau','Abwcd',1);//5
        //echo strcspn('wanjauw','Abwcd',1);//5
        //$titleAndFirstName --> (MissSharleen,ABCDEFGHIJKLMNOPQRSTUVWXYZ,1)//0
        $secondCapPos  = strcspn($titleAndFirstName, "ABCDEFGHIJKLMNOPQRSTUVWXYZ", 1); //3 + 1

        //including that position, get all the strings after the capital letter e.g Sharleen (name only)

        echo substr("Morning", 0, 3); //Mor
        echo substr("Morning", 0, 6); //Mornin
        echo substr("Morning", 3, 4); //ning
        echo substr("Morning", 3); //ning

        //MissSharleen S is at position secondCapPos
        // substr('MissSharleen',4);
        $firstName = substr($titleAndFirstName, $secondCapPos);

        //get all the characters before that position e.g Miss (Title)
        //substr('MissSharleen',0,4) //Miss
        $title = substr($titleAndFirstName, 0, $secondCapPos);

        //join the title and the name with a dot and space e.g Miss. Sharleen
        $fNameProper = $title . '. ' . $firstName;

        //return the joined string
        return $fNameProper;
    }

    /**
     * This method returns a well formatted email address
     * 
     * Example input -> Wanguiatexample.com
     *               -> Batistaatjkuat.com  (@TODO :How would we cater for such an input??)
     * @return string example -> Wangui@example.com   
     */
    public function getSanitizedEmail()
    {
        //get the email address
        $malformedEmail = $this->email_address;

        $count = 0;
        //replace it with the @ symbol
        $replacedAts = str_replace("at", "@", $malformedEmail, $count);
        //return the well formatted email address
        //we are assuming that the at to replace is always the first one
        if ($count > 1) {
            //replace all the others with at again
            //get the other part of the string,after the first @
            //mukami@jku@.com
            $positionOfFirstAt = strpos($replacedAts, "@"); //6
            $firstPartOfEmail = substr($replacedAts, $positionOfFirstAt + 1); //mukami@
            $lasttPartOfEmail = substr($replacedAts, $positionOfFirstAt + 1); //jku@.com
            //replace that @ with at
            echo $lastPartOfEmailProper = str_replace("@", "at", $malformedEmail, $count); //jkuat.com

            //join the two
            $replacedAts = $firstPartOfEmail . $lastPartOfEmailProper;
        }

        return $replacedAts;
    }
}
