CREATE DATABASE db_tracks;

USE db_tracks;

CREATE TABLE tbl_music
 (
  `title` varchar(180) NOT NULL DEFAULT '',
  `link` varchar(180) NOT NULL DEFAULT '',
  `description` varchar(180) NOT NULL DEFAULT '',
  `mus_title` varchar(180) NOT NULL DEFAULT '',
  `mus_artist` varchar(180) NOT NULL DEFAULT '',
  `mus_album` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`mus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;
 );
