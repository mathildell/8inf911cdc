-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2017 at 07:02 AM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `id3706458_db276902`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_texts`
--

CREATE TABLE `admin_texts` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `google_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publishedDate` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `genres_id` varchar(255) NOT NULL,
  `ALaUne` int(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `google_id`, `title`, `author`, `description`, `publisher`, `publishedDate`, `image`, `genres_id`, `ALaUne`, `created`) VALUES
(1, 'o9-UCgAAQBAJ', 'Truly Madly Guilty', 'Liane Moriarty', '“Here’s the best news you’ve heard all year: Not a single page disappoints....The only difficulty withTruly Madly Guilty? Putting it down.', 'Flatiron Books', '2016-07-26', 'http://books.google.com/books/content?id=o9-UCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1', 0, '2017-12-04 07:12:15'),
(2, '-qepCgAAQBAJ', 'End of Watch', 'Stephen King', 'THE #1 NEW YORK TIMES BESTSELLER A New York Times Notable Book The spectacular finale to the New York Times bestselling trilogy that began with Mr. Mercedes (winner of the Edgar Award) and Finders Keepers—In End of Watch, the diabolical “Mercedes Killer” ', 'Simon and Schuster', '2016-06-07', 'http://books.google.com/books/content?id=-qepCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1', 0, '2017-12-04 07:12:27'),
(3, '2JdcMQAACAAJ', 'The Underground Railroad', 'Colson Whitehead', 'Winner of the Pulitzer Prize Winner of the National Book Award Winner of the Andrew Carnegie Medal for Excellence in Fiction Longlisted for the Man Booker Prize Winner of the Arthur C. Clarke Award Finalist for the Dayton Literary Peace Prize Longlisted f', 'Anchor', '2018-01-30', 'http://books.google.com/books/content?id=2JdcMQAACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '1', 0, '2017-12-04 07:12:44'),
(4, 'peTPCgAAQBAJ', 'It Ends with Us', 'Colleen Hoover', 'Instant New York Times Bestseller The newest, highly anticipated novel from beloved #1 New York Times bestselling author, Colleen Hoover. Sometimes it is the one who loves you who hurts you the most. Lily hasn’t always had it easy, but that’s never stoppe', 'Simon and Schuster', '2016-08-02', 'http://books.google.com/books/content?id=peTPCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1', 0, '2017-12-04 07:12:00'),
(5, 'f4WfCgAAQBAJ', 'Hamilton', 'Lin-Manuel Miranda', 'Winner of the 2016 Pulitzer Prize for Drama and Eleven Tony Awards, including Best Musical Lin-Manuel Miranda\'s groundbreaking musical Hamilton is as revolutionary as its subject, the poor kid from the Caribbean who fought the British, defended the Consti', 'Grand Central Publishing', '2016-04-12', 'http://books.google.com/books/content?id=f4WfCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '2', 0, '2017-12-04 07:12:00'),
(6, '', 'When Breath Becomes Air', 'Paul Kalanithi', '#1 NEW YORK TIMES BESTSELLER * For readers of Atul Gawande, Andrew Solomon, and Anne Lamott, a profoundly moving, exquisitely observed memoir by a young neurosurgeon faced with a terminal cancer diagnosis who attempts to answer the question What makes a l', '', '2016', 'http://books.google.com/books/content?id=93faCwAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '3', 0, '2017-12-05 04:09:52'),
(7, 'vhmZCgAAQBAJ', 'Are We Smart Enough to Know How Smart Animals Are?', 'Frans de Waal', 'A New York Times Bestseller From world-renowned biologist and primatologist Frans de Waal, a groundbreaking work on animal intelligence destined to become a classic. What separates your mind from an animal’s? Maybe you think it’s your ability to design to', 'W. W. Norton &amp; Company', '2016-04-25', 'http://books.google.com/books/content?id=vhmZCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '3', 0, '2017-12-04 07:12:35'),
(8, 'Yl_LCgAAQBAJ', 'Adulthood Is a Myth', 'Sarah Andersen', 'These casually drawn, perfectly on-point comics by the hugely popular young Brooklyn-based artist Sarah Andersen are for the rest of us. They document the wasting of entire beautiful weekends on the internet, the unbearable agony of holding hands on the s', 'Andrews McMeel Publishing', '2016-03-08', 'http://books.google.com/books/content?id=Yl_LCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '4', 0, '2017-12-04 08:50:19'),
(9, '_kuOCgAAQBAJ', 'A Court of Mist and Fury', 'Sarah J. Maas', 'The # 1 New York Times bestselling sequel to Sarah J. Maas\' spellbinding A Court of Thorns and Roses. Feyre survived Amarantha\'s clutches to return to the Spring Court--but at a steep cost. Though she now has the powers of the High Fae, her heart remains', 'Bloomsbury Publishing USA', '2016-05-03', 'http://books.google.com/books/content?id=_kuOCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '6,13', 0, '2017-12-04 08:56:26'),
(10, 'uqUwCgAAQBAJ', 'Six of Crows', 'Leigh Bardugo', 'Nominated for the CILIP Carnegie Medal 2017, this fantasy epic from the No. 1 NEW YORK TIMES bestselling author of the Grisha trilogy is gripping, sweeping and memorable - perfect for fans of George R. R. Martin, Laini Taylor and Kristin Cashore. Criminal', 'Hachette UK', '2015-09-29', 'http://books.google.com/books/content?id=uqUwCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '5,12', 0, '2017-12-04 08:54:51'),
(11, 'L25K1tY5WyoC', 'Gone Girl', 'Gillian Flynn', 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunne’s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nick’s clever and beautiful wife disappears. Husba', 'Crown', '2012-06-05', 'http://books.google.com/books/content?id=L25K1tY5WyoC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1,11', 1, '2017-12-05 05:00:14'),
(12, '8gx-AwAAQBAJ', 'The Call of Cthulhu', 'H. P. Lovecraft', 'The Call of Cthulhu is a story by American writer H. P. Lovecraft. The story deals with a manuscript found among the papers of the late Francis Wayland Thurston, of Boston. In the text, Thurston recounts his discovery of notes left behind by his granduncl', 'BookRix', '2017-08-01', 'http://books.google.com/books/content?id=8gx-AwAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1,8', 0, '2017-12-04 08:51:31'),
(13, 't34-jgEACAAJ', 'Simon vs. the Homo Sapiens Agenda', 'Becky Albertalli', 'William C. Morris Award Finalist A National Book Award Longlist Title Everybody is talking about Simon vs. the Homo Sapiens Agenda!', 'Balzer + Bray', '2016-06-07', 'http://books.google.com/books/content?id=t34-jgEACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '7,9,5', 0, '2017-12-04 08:59:03'),
(14, 'vYSArk8vNCYC', 'Vicious', 'V. E. Schwab', 'A masterful tale of ambition, jealousy, desire, and superpowers. Victor and Eli started out as college roommates—brilliant, arrogant, lonely boys who recognized the same sharpness and ambition in each other. In their senior year, a shared research interes', 'Tor Books', '2013-09-24', 'http://books.google.com/books/content?id=vYSArk8vNCYC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1,10', 1, '2017-12-05 04:08:21'),
(15, 'FrXsTNgkEqgC', 'The Song of Achilles', 'Madeline Miller', 'Greece in the age of Heroes. Patroclus, an awkward young prince, has been exiled to the kingdom of Phthia. Here he is nobody, just another unwanted boy living in the shadow of King Peleus and his golden son, Achilles. Achilles, \'best of all the Greeks\', i', 'A&amp;C Black', '2011-09-05', 'http://books.google.com/books/content?id=FrXsTNgkEqgC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1,8', 0, '2017-12-04 08:51:33'),
(16, 'JkdnjgEACAAJ', 'How to Be a Normal Person', 'Tj Klune', 'Gustavo Tiberius is not normal. He knows this. Everyone in his small town of Abby, Oregon, knows this. He reads encyclopedias every night before bed. He has a pet ferret called Harry S. Truman. He owns a video rental store that no one goes to. His closest', '', '2015-10-16', 'http://books.google.com/books/content?id=JkdnjgEACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '7,9,5', 0, '2017-12-05 04:09:39'),
(17, '2vQYBAAAQBAJ', 'The Girl on the Train', 'Paula Hawkins', 'Three women, three men, connected through marriage or infidelity. Each is to blame for something. But only one is a killer in this #1 New York Times bestselling psychological thriller about human frailty and obsession. Just what goes on in the houses you pass by every day? Rachel takes the same commuter train every morning and evening, rattling over the same junctions, flashing past the same townhouses.The train stops at the same signal every day, and she sees the same couple, breakfasting on their roof terrace. Jason and Jess, as she calls them, seem so happy. Then one day Rachel sees someone new in their garden. Soon after, Rachel sees the woman she calls Jess on the news. Jess has disappeared. Through the ensuing police investigation, Rachel is drawn deeper into the lives of the couple she learns are really Megan and Scott Hipwell. As she befriends Scott, Rachel pieces together what really happened the day Megan disappeared. But when Megan\'s body is found, Rachel finds herself the chief suspect in the case. Plunged into a world of betrayals, secrets and deceptions, Rachel must confront the facts about her own past and her own failed marriage. A sinister and twisting story that will keep you guessing at every turn, The Girl on the Train is a high-speed chase for the truth.', 'Doubleday Canada', '2015-01-06', 'http://books.google.com/books/content?id=2vQYBAAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1,11', 0, '2017-12-05 04:29:16'),
(18, 'd1VXAgAAQBAJ', 'Mr. Mercedes', 'Stephen King', 'In a high-suspense race against time, three of the most unlikely heroes Stephen King has ever created try to stop a lone killer from blowing up thousands. “Mr. Mercedes is a rich, resonant, exceptionally readable accomplishment by a man who can write in whatever genre he chooses” (The Washington Post). The stolen Mercedes emerges from the pre-dawn fog and plows through a crowd of men and women on line for a job fair in a distressed American city. Then the lone driver backs up, charges again, and speeds off, leaving eight dead and more wounded. The case goes unsolved and ex-cop Bill Hodges is out of hope when he gets a letter from a man who loved the feel of death under the Mercedes’s wheels… Brady Hartsfield wants that rush again, but this time he’s going big, with an attack that would take down thousands—unless Hodges and two new unusual allies he picks up along the way can throw a wrench in Hartsfield’s diabolical plans. Stephen King takes off on a “nerve-shredding, pulse-pounding race against time” (Fort Worth Star-Telegram) with this acclaimed #1 bestselling thriller.', 'Simon and Schuster', '2014-06-03', 'http://books.google.com/books/content?id=d1VXAgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '15,11', 0, '2017-12-05 04:56:34'),
(19, 'S85NCwAAQBAJ', 'It', 'Stephen King', 'They were seven teenagers when they first stumbled upon the horror. Now they were grown-up men and women who had gone out into the big world to gain success and happiness. But none of them could withstand the force that drew them back to Derry, Maine to face the nightmare without an end, and the evil without a name.', 'Simon and Schuster', '2016-01-05', 'http://books.google.com/books/content?id=S85NCwAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '15,1', 0, '2017-12-05 04:12:07'),
(20, 'W5sIuoBrFwYC', 'The Republic of Pirates', 'Colin Woodard', 'The untold story of a heroic band of Caribbean pirates whose defiance of imperial rule inspired revolt in colonial outposts across the world. In the early eighteenth century, the Pirate Republic was home to some of the great pirate captains, including Blackbeard,', 'Houghton Mifflin Harcourt', '2008-05-12', 'http://books.google.com/books/content?id=W5sIuoBrFwYC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '12,16', 1, '2017-12-05 04:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Fiction'),
(2, 'Performing Arts'),
(3, 'Science'),
(4, 'Humor'),
(5, 'Young Adult Fiction'),
(6, 'Juvenile Fiction'),
(7, 'Romance'),
(8, 'Mythology'),
(9, 'LGBT'),
(10, 'Magic'),
(11, 'Thriller'),
(12, 'Adventures'),
(13, 'Fantaisie'),
(15, 'Horror'),
(16, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `salons_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `users_id`, `salons_id`, `message`, `timestamp`) VALUES
(1, 1, 1, 'e', '2017-12-05 01:12:05'),
(2, 1, 1, 'lksw', '2017-12-05 02:12:32'),
(3, 1, 1, 'praying', '2017-12-05 02:12:33'),
(4, 0, 1, 'please work?', '2017-12-05 02:12:49'),
(5, 3, 1, 'hello', '2017-12-05 02:12:57'),
(6, 1, 1, 'yikes', '2017-12-05 02:12:45'),
(7, 3, 1, 'yukes', '2017-12-05 02:12:44'),
(8, 1, 1, 'ke', '2017-12-05 02:12:10'),
(9, 1, 1, 'yeeeee', '2017-12-05 02:12:59'),
(10, 3, 1, 'eiiii', '2017-12-05 02:12:09'),
(11, 1, 1, 'e', '2017-12-05 02:12:26'),
(12, 1, 1, 'r', '2017-12-05 02:12:49'),
(13, 3, 1, 'r', '2017-12-05 02:12:19'),
(14, 3, 1, 'fsdjkwxdlk', '2017-12-05 02:12:06'),
(15, 1, 1, 'e', '2017-12-05 02:12:01'),
(16, 3, 1, 'dsklwshdwx', '2017-12-05 02:12:23'),
(17, 3, 1, 'ksjw', '2017-12-05 02:12:44'),
(18, 1, 1, 'omg it works', '2017-12-05 02:12:50'),
(19, 1, 1, 'incredible', '2017-12-05 02:12:15'),
(20, 1, 1, 'Heyyyy', '2017-12-05 03:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `books_id` int(11) NOT NULL,
  `users_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `books_id`, `users_id`, `title`, `content`, `timestamp`) VALUES
(1, 8, '1', 'Review #1', 'Aliquam aliquet, est a ullamcorper condimentum, tellus nulla fringilla elit, a iaculis nulla turpis sed wisi. Fusce volutpat. Etiam sodales ante id nunc. Proin ornare dignissim lacus. Nunc porttitor nunc a sem. Sed sollicitudin velit eu magna. Aliquam erat volutpat. Vivamus ornare est non wisi. Proin vel quam. Vivamus egestas. Nunc tempor diam vehicula mauris. Nullam sapien eros, facilisis vel, eleifend non, auctor dapibus, pede.', '2017-12-04 10:41:00'),
(2, 8, '1', 'Post', 'Contenu', '2017-12-04 10:12:55'),
(3, 2, '1', 'Ea quia deserunt officiis labore consectetur doloremque libero', 'Ut in maxime aut sint ipsa et nisi magni vel aliquid. Id accusamus molestiae dolorem tempora quia dolore quod. Aliquam lectus orci, adipiscing et, sodales ac, feugiat non, lacus. Ut dictum velit nec est. Quisque posuere, purus sit amet malesuada blandit, sapien sapien auctor arcu, sed pulvinar felis mi sollicitudin tortor. Maecenas volutpat, nisl et dignissim pharetra, urna lectus ultrices est, vel pretium pede turpis id velit. Aliquam sagittis magna in felis egestas rutrum. Proin wisi libero, vestibulum eget, pulvinar nec, suscipit ut, mi. Integer in arcu ultricies leo dapibus ultricies. Sed rhoncus lobortis dolor. Suspendisse dolor. Mauris sapien velit, pulvinar non, rutrum non, consectetuer eget, metus. Morbi tincidunt lorem at urna. Etiam porta. Ut mauris. Phasellus tristique rhoncus magna. Nam tincidunt consequat urna. Sed tempor.', '2017-12-04 10:12:49'),
(4, 11, '1', 'Meilleur que le film!', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis.', '2017-12-04 21:12:10'),
(5, 11, '3', 'Optio veniam assumenda fugit dolores unde reprehenderit', 'Dolores magni vitae corporis sint quam eveniet sint veniam pariatur Voluptatem aut consequat Distinctio Fuga Perferendis amet', '2017-12-05 03:12:31'),
(8, 6, '1', 'Voluptates laborum', 'Maxime vel aliquip sed et blanditiis anim id deserunt explicabo Quis. Beatae sit consectetur qui sit laborum Sit consequatur nostrum quas dolor provident molestias quia voluptas', '2017-12-05 04:12:27'),
(9, 20, '4', 'Quia ipsam mollitia excepteur iusto magna sed sit pariatur Nam', 'Beatae neque dolor omnis necessitatibus eos veniam beatae magna incididunt saepe excepturi in dolor odio. Pellentesque vel dui sed orci faucibus iaculis. Suspendisse dictum magna id purus tincidunt rutrum. Nulla congue. Vivamus sit amet lorem posuere dui vulputate ornare. Phasellus mattis sollicitudin ligula. Duis dignissim felis et urna. Integer adipiscing congue metus. Nam pede. Etiam non wisi. Sed accumsan dolor ac augue. Pellentesque eget lectus. Aliquam nec dolor nec tellus ornare venenatis. Nullam blandit placerat sem. Curabitur quis ipsum. Mauris nisl tellus, aliquet eu, suscipit eu, ullamcorper quis, magna. Mauris elementum, pede at sodales vestibulum, nulla tortor congue massa, quis pellentesque odio dui id est. Cras faucibus augue.', '2017-12-05 05:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `salons`
--

CREATE TABLE `salons` (
  `id` int(11) NOT NULL,
  `books_id` int(11) NOT NULL,
  `users_id` varchar(255) NOT NULL,
  `open` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salons`
--

INSERT INTO `salons` (`id`, `books_id`, `users_id`, `open`, `date`) VALUES
(1, 3, '1,2,3,4', 0, '2017-12-09 22:00:00'),
(2, 16, '', 0, '2017-12-04 12:00:00'),
(7, 15, '1,4', 0, '2017-12-03 03:00:00'),
(8, 14, '1', 0, '2017-11-26 03:00:00'),
(9, 12, '1', 0, '2017-11-30 03:00:00'),
(10, 2, '', 0, '2018-01-31 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '/view/assets/img/users/default.jpg',
  `isAdmin` int(1) NOT NULL DEFAULT '0',
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `about`, `image`, `isAdmin`, `registered`) VALUES
(1, 'mlucelucas', '$2y$10$UmNz3juptYZMKfC5IVAv3.py20bPxJrUH4L00h0ntmV7m5r5rJPFO', 'mathilde@example.com', 'Hello, it\'s me.', '/view/assets/img/users/mlucelucas_5a2394907c047.jpg', 1, '2017-12-03 03:35:58'),
(2, 'mathilde2', '$2y$10$WIMw9LZyUtud5A0DjVmOq.3R3ToQIGLoxfrluURTDHdMLh2ZlPm0a', 'mathilde@lucelucas.work', 'Test test test', '/view/assets/img/users/mathilde2_5a2514c900a9b.jpg', 0, '2017-12-04 09:12:42'),
(3, 'mathilde3', '$2y$10$08TA7C7GaT6xb/FvClCp4OQlQ/kHLjWyIaUgQvaZsQvvdvCKUX7gi', 'mathilde@work.com', '', '/view/assets/img/users/default.jpg', 0, '2017-12-05 02:12:29'),
(4, 'demo', '$2y$10$yYiuiyWuICUDlxJTqG7C1.o/1H1jJfrUyzT3FbiPMi1vuA/2JDnky', 'admin@admin', '[Compte administrateur.]\r\nCras dictum. Maecenas ut turpis. In vitae erat ac orci dignissim eleifend. Nunc quis justo. Sed vel ipsum in purus tincidunt pharetra. Sed pulvinar, felis id consectetuer malesuada, enim nisl mattis elit, a facilisis tort', '/view/assets/img/users/admin_5a261ef91ad6b.jpg', 1, '2017-12-05 04:12:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_texts`
--
ALTER TABLE `admin_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_texts`
--
ALTER TABLE `admin_texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;