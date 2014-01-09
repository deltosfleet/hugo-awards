<?php
/**
 * Copyright 2013 Steven R. Staton (http://www.deltos.com/hugo-awards)
 * This package is dedicated to LoneStarCon3 and Bill Parker.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/

// NOTE: The Convention properties are pre-configured with LoneStarCon 3 values

$Convention_Acronym        = 'LSC3';			 // Convention's acronym (e.g. LSC3)
$Convention_Canonical_Name = 'LoneStarCon 3';    // Convention's full name
$Convention_Domain_Name    = 'lonestarcon3.org'; // Convention's full domain name
$Convention_Hugo_Mailbox   = 'hugoadmin';		 // Convention's Hugo Admin mailbox
$Convention_Year		   = 2013;				 // Convention's Year
$Convention_Index          = "71st";			 // Convention's iteration of WorldCon

$MySQL_User = '';								 // MySQL user's account name
$MySQL_Pass = '';								 // Password for MySQL user's account
$MySQL_Host = 'localhost';						 // MySQL Server hostname (default is localhost)
$MySQL_Data = 'Hugo';							 // MySQL Database holding Hugo data

$MySQL_Membership_Table = 'memberships';		 // MySQL Membership table
$MySQL_Packet_Log_Table = 'packet-log';			 // MySQL Packet Log table
$MySQL_Candidate_Table  = 'candidates';			 // MySQL Candidate table
$MySQL_Vote_Table       = 'votes';				 // MySQL Ballot table
$MySQL_Nom_Table        = 'noms';				 // MySQL Nomination table
$MySQL_PIN_Table        = 'PINs';				 // MySQL PIN table

// Open the PDO object to MySQL for the Hugo Database

$db = new PDO("mysql:dbname=$MySQL_Data;host=$MySQL_Host;charset=utf8", $MySQL_User, $MySQL_Pass);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

$AWS_Bucket = '';							  // Amazon S3 Bucket name
$AWS_Key = '';						  // Amazon S3 Archive Key
$AWS_Secret = ''; // Amazon S3 Secret Key

$MD5 = 'md5sum'; // Local (Linux, Mac OS X) version of md5(1)
?>
