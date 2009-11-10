SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `faq` (
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `slug` varchar(64) NOT NULL,
  PRIMARY KEY  (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `faq` (`question`, `answer`, `slug`) VALUES
('Who was the original author of LiteStep?', 'Francis Gastellu', 'original-author'),
('Who collected all the questions for this FAQ?', 'the-golem and Tobbe', 'who-composed-this-faq');
