SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `articles` (
  `author` text NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(64) NOT NULL,
  PRIMARY KEY  (`date`,`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `articles` (`author`, `title`, `body`, `date`, `slug`) VALUES
('Tobbe', 'First article', 'This is the first ever article written. Just to have something to test this setup with.', '2009-11-10', 'first-article'),
('Tobbe', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2009-11-10', 'lorem-ipsum'),
('UncleTom', 'Hillbilly ipsum', 'Water jehosephat uncle muster, fancy, afford soap simple drunk put hollarin'' fried. Heffer gonna showed landlord farmer, kinfolk panhandle ain''t, cowpoke ignorant truck down. Me, maw polecat y''all boobtube chitlins saw preacher shed old. Weren''t drunk chitlins commencin'' bacon jumpin'' catfight naw hardware. Pudneer jiggly hayseed nothin'', roped em, feathered boobtube skanky mule fit grandma skanky ya. Panhandle, hollarin'' hospitality shed, drive consarn pappy. \r\n\r\nTools yippie burnin'' horse good preacher, firewood cold tornado cheatin'' no in overalls thar. Townfolk fussin'' cold promenade come fish hee-haw got preacher, come squalor rockinchair farm greasy. Water out mule, fell boxcar stew done right. And uncle old pot ignorant wuz sheep fish foreclose, cain''t foreclose skinny. Promenade darn, knickers water stew his put beer wild, kickin'' butt jig got. Pick-up slap rightly right mobilehome sheep fetched rottgut cousin huntin''. Old hootch gospel pick-up catfish shotgun firewood, give good simple eatin'' heap landlord tractor. Boxcar jail liar saw jumpin'' his buckshot. \r\n\r\nInbred hogs sheep hollarin'' askin'' townfolk. Has, buy liar, stinky dumb, creosote put snakeoil old, pappy, java fussin'' redblooded work townfolk. Aunt good landlord neighbor''s fish fish skedaddled wuz. Hootch uncle dirty sam-hell rockinchair boxcar, sam-hell fricaseed give plumb whoopin'' guzzled damn guzzled.', '2009-11-10', 'hillbilly-ipsum');
