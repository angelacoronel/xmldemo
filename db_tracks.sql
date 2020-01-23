CREATE DATABASE db_tracks;

USE db_tracks;

CREATE TABLE tbl_music
 (
  `mus_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `mus_title` varchar(180) NOT NULL DEFAULT '',
  `mus_artist` varchar(180) NOT NULL DEFAULT '',
  `mus_album` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`mus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;
 );
