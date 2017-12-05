-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2017 at 01:44 PM
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
(1, 'fUA_DQAAQBAJ', 'Little Fires Everywhere', 'Celeste Ng', 'Everyone in Shaker Heights was talking about it that summer: how Isabelle, the last of the Richardson children, had finally gone around the bend and burned the house down. In Shaker Heights, a placid, progressive suburb of Cleveland, everything is meticulously planned - from the layout of the winding roads, to the colours of the houses, to the successful lives its residents will go on to lead. And no one embodies this spirit more than Elena Richardson, whose guiding principal is playing by the rules.', 'Hachette UK', '2017-09-12', 'http://books.google.com/books/content?id=fUA_DQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '1', 1, '2017-12-05 07:46:32'),
(2, 'lv2YDQAAQBAJ', 'Into the Water', 'Paula Hawkins', 'The author of the #1 New York Times bestseller and global phenomenon The Girl on the Train returns with Into the Water, her addictive new novel of psychological suspense. A single mother turns up dead at the bottom of the river that runs through town. Earlier in the summer, a vulnerable teenage girl met the same fate. They are not the first women lost to these dark waters, but their deaths disturb the river and its history, dredging up secrets long submerged. Left behind is a lonely fifteen-year-old girl. Parentless and friendless, she now finds herself in the care of her mother\'s sister, a fearful stranger who has been dragged back to the place she deliberately ran from—a place to which she vowed she\'d never return. With the same propulsive writing and acute understanding of human instincts that captivated millions of readers around the world in her explosive debut thriller, The Girl on the Train, Paula Hawkins delivers an urgent, twisting, deeply satisfying read that hinges on the deceptiveness of emotion and memory, as well as the devastating ways that the past can reach a long arm into the present. Beware a calm surface—you never know what lies beneath.', 'Doubleday Canada', '2017-05-02', 'http://books.google.com/books/content?id=lv2YDQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '2,1', 0, '2017-12-05 07:12:29'),
(3, '2vQYBAAAQBAJ', 'The Girl on the Train', 'Paula Hawkins', 'Three women, three men, connected through marriage or infidelity. Each is to blame for something. But only one is a killer in this #1 New York Times bestselling psychological thriller about human frailty and obsession. Just what goes on in the houses you pass by every day? Rachel takes the same commuter train every morning and evening, rattling over the same junctions, flashing past the same townhouses.The train stops at the same signal every day, and she sees the same couple, breakfasting on their roof terrace. Jason and Jess, as she calls them, seem so happy. Then one day Rachel sees someone new in their garden. Soon after, Rachel sees the woman she calls Jess on the news. Jess has disappeared. Through the ensuing police investigation, Rachel is drawn deeper into the lives of the couple she learns are really Megan and Scott Hipwell. As she befriends Scott, Rachel pieces together what really happened the day Megan disappeared. But when Megan\'s body is found, Rachel finds herself the chief suspect in the case. Plunged into a world of betrayals, secrets and deceptions, Rachel must confront the facts about her own past and her own failed marriage. A sinister and twisting story that will keep you guessing at every turn, The Girl on the Train is a high-speed chase for the truth.', 'Doubleday Canada', '2015-01-06', 'http://books.google.com/books/content?id=2vQYBAAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '2,1', 0, '2017-12-05 07:12:41'),
(4, 'DU0LDAAAQBAJ', 'Fantastic Beasts and Where to Find Them: The Original Screenplay', 'J.K. Rowling', 'When Magizoologist Newt Scamander arrives in New York, he intends his stay to be just a brief stopover. However, when his magical case is misplaced and some of Newt\'s fantastic beasts escape, it spells trouble for everyone... Inspired by the original Hogwart’s textbook by Newt Scamander, Fantastic Beasts and Where to Find Them: The Original screenplay marks the screenwriting debut of J.K. Rowling, author of the beloved and internationally bestselling Harry Potter books. A feat of imagination and featuring a cast of remarkable characters and magical creatures, this is epic adventure-packed storytelling at its very best. Whether an existing fan or new to the wizarding world, this is a perfect addition for any film lover or reader’s bookshelf. The film Fantastic Beasts and Where to Find Them will have its theatrical release on 18th November 2016.', 'Pottermore', '2016-11-18', 'http://books.google.com/books/content?id=DU0LDAAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '4,3', 0, '2017-12-05 07:23:18'),
(5, 'G4Q2DwAAQBAJ', 'Sleeping Beauties', 'Stephen King', 'In this spectacular father-son collaboration, Stephen King and Owen King tell the highest of high-stakes stories: what might happen if women disappeared from the world of men? In a future so real and near it might be now, something happens when women go to sleep; they become shrouded in a cocoon-like gauze. If they are awakened, if the gauze wrapping their bodies is disturbed or violated, the women become feral and spectacularly violent; and while they sleep they go to another place. The men of our world are abandoned, left to their increasingly primal devices. One woman, however, the mysterious Evie, is immune to the blessing or curse of the sleeping disease. Is Evie a medical anomaly to be studied, or is she a demon who must be slain? Set in a small Appalachian town whose primary employer is a women’s prison, Sleeping Beauties is wildly provocative and gloriously absorbing.', 'Simon and Schuster', '2017-09-26', 'http://books.google.com/books/content?id=G4Q2DwAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '5,1', 0, '2017-12-05 07:12:10'),
(6, 'BH6nDQAAQBAJ', 'Without Merit', 'Colleen Hoover', 'From the #1 New York Times bestselling author of It Ends With Us and November 9 comes a moving and haunting novel of family, love, and the power of the truth. “Not every mistake deserves a consequence. Sometimes the only thing it deserves is forgiveness.” The Voss family is anything but normal. They live in a repurposed church, newly baptized Dollar Voss. The once cancer-stricken mother lives in the basement, the father is married to the mother’s former nurse, the little half-brother isn’t allowed to do or eat anything fun, and the eldest siblings are irritatingly perfect. Then, there’s Merit. Merit Voss collects trophies she hasn’t earned and secrets her family forces her to keep. While browsing the local antiques shop for her next trophy, she finds Sagan. His wit and unapologetic idealism disarm and spark renewed life into her—until she discovers that he’s completely unavailable. Merit retreats deeper into herself, watching her family from the sidelines, when she learns a secret that no trophy in the world can fix. Fed up with the lies, Merit decides to shatter the happy family illusion that she’s never been a part of before leaving them behind for good. When her escape plan fails, Merit is forced to deal with the staggering consequences of telling the truth and losing the one boy she loves. Poignant and powerful, Without Merit explores the layers of lies that tie a family together and the power of love and truth.', 'Simon and Schuster', '2017-10-03', 'http://books.google.com/books/content?id=BH6nDQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '6,1', 0, '2017-12-05 07:12:00'),
(7, 'a8KtDgAAQBAJ', 'Artemis', 'Andy Weir', 'The bestselling author of The Martian returns with an irresistible new near-future thriller—a heist story set on the moon. Jazz Bashara is a criminal. Well, sort of. Life on Artemis, the first and only city on the moon, is tough if you’re not a rich tourist or an eccentric billionaire. So smuggling in the occasional harmless bit of contraband barely counts, right? Not when you\'ve got debts to pay and your job as a porter barely covers the rent. Everything changes when Jazz sees the chance to commit the perfect crime, with a reward too lucrative to turn down. But pulling off the impossible is just the start of her problems, as she learns that she\'s stepped square into a conspiracy for control of Artemis itself—and that now, her only chance at survival lies in a gambit even riskier than the first.', 'Crown', '2017-11-14', 'http://books.google.com/books/content?id=a8KtDgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '7,1', 0, '2017-12-05 07:12:52'),
(8, 'hx5DDQAAQBAJ', 'Astrophysics for People in a Hurry', 'Neil deGrasse Tyson', 'The #1 New York Times Bestseller: The essential universe, from our most celebrated and beloved astrophysicist. What is the nature of space and time? How do we fit within the universe? How does the universe fit within us? There’s no better guide through these mind-expanding questions than acclaimed astrophysicist and best-selling author Neil deGrasse Tyson. But today, few of us have time to contemplate the cosmos. So Tyson brings the universe down to Earth succinctly and clearly, with sparkling wit, in tasty chapters consumable anytime and anywhere in your busy day. While you wait for your morning coffee to brew, for the bus, the train, or a plane to arrive, Astrophysics for People in a Hurry will reveal just what you need to be fluent and ready for the next cosmic headlines: from the Big Bang to black holes, from quarks to quantum mechanics, and from the search for planets to the search for life in the universe.', 'W. W. Norton &amp; Company', '2017-05-02', 'http://books.google.com/books/content?id=hx5DDQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '8', 1, '2017-12-05 08:17:13'),
(9, 'Yl_LCgAAQBAJ', 'Adulthood Is a Myth', 'Sarah Andersen', 'These casually drawn, perfectly on-point comics by the hugely popular young Brooklyn-based artist Sarah Andersen are for the rest of us. They document the wasting of entire beautiful weekends on the internet, the unbearable agony of holding hands on the street with a gorgeous guy, and dreaming all day of getting home and back into pajamas. In other words, the horrors and awkwardnesses of young modern life. Oh and they are totally not autobiographical. At all. Adulthood Is a Myth presents many fan favorites plus dozens of all-new comics exclusive to this book. Like the work of fellow Millennial authors Allie Brosh, Grace Helbig, and Gemma Correll, Sarah\'s frankness on personal issues like body image, self-consciousness, introversion, relationships, and the frequency of bra-washing makes her comics highly relatable and deeply hilarious.', 'Andrews McMeel Publishing', '2016-03-08', 'http://books.google.com/books/content?id=Yl_LCgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9,10', 1, '2017-12-05 08:15:21'),
(10, 'kl7FDgAAQBAJ', 'The Sun and Her Flowers', 'Rupi Kaur', 'From Rupi Kaur, the #1 New York Times bestselling author of milk and honey, comes her long-awaited second collection of poetry. A vibrant and transcendent journey about growth and healing. Ancestry and honoring one’s roots. Expatriation and rising up to find a home within yourself. Divided into five chapters and illustrated by Kaur, the sun and her flowers is a journey of wilting, falling, rooting, rising, and blooming. A celebration of love in all its forms. this is the recipe of life said my mother as she held me in her arms as i wept think of those flowers you plant in the garden each year they will teach you that people too must wilt fall root rise in order to bloom', 'Simon and Schuster', '2017-10-03', 'http://books.google.com/books/content?id=kl7FDgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '11', 0, '2017-12-05 07:27:23'),
(11, 'OTwYDQAAQBAJ', 'The Hate U Give', 'Angie Thomas', 'A National Book Award Longlist title with eight starred reviews! #1 New York Times Bestseller!', 'HarperCollins', '2017-02-28', 'http://books.google.com/books/content?id=OTwYDQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '12', 0, '2017-12-05 07:12:42'),
(12, 'RUAYDQAAQBAJ', 'Rich People Problems', 'Kevin Kwan', 'When Nicholas Young hears that his grandmother, Su Yi, is on her deathbed, he rushes to be by her bedside—but he\'s not alone. The entire Shang-Young clan has convened from all corners of the globe to stake claim on their matriarch’s massive fortune. With each family member vying to inherit Tyersall Park—a trophy estate on 64 prime acres in the heart of Singapore—Nicholas’s childhood home turns into a hotbed of speculation and sabotage.', 'Doubleday Canada', '2017-05-23', 'http://books.google.com/books/content?id=RUAYDQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '1', 0, '2017-12-05 08:27:34'),
(13, 'P1ikAQAACAAJ', 'The Keeper of Lost Things', 'Ruth Hogan', 'Forty years ago, Anthony Peardew carelessly lost a keepsake from his beloved fiancée, Therese. That very same day, she died unexpectedly. Brokenhearted, Anthony sought consolation in rescuing lost objects—the things others have dropped, misplaced, or accidently left behind—and writing stories about them. Now, in the twilight of his life, Anthony worries that he has not fully discharged his duty to reconcile all the lost things with their owners.', 'William Morrow Paperbacks', '2017-11-28', 'http://books.google.com/books/content?id=P1ikAQAACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '1', 0, '2017-12-05 08:44:36'),
(14, '8AT0DQAAQBAJ', 'Never Let You Go', 'Chevy Stevens', 'The author of Still Missing targets her readership with a novel that hits all the notes they come to expect from her—and ratchets up the stakes even more. Lindsey Nash has left an abusive relationship and her ex-husband was sent to jail. She has started over with a new life, her own business, and a teenage daughter who needs her more than ever. When her husband is finally released, Lindsey believes she has cut all ties. There is no way he can ever find her and her daughter again. But she gets the sense that someone is watching her, tracking her every move. Her new boyfriend is threatened. Her home is invaded. Even her daughter is shadowed. Lindsey is convinced it\'s her ex-husband, even though he claims he is a different person and doesn\'t want to do her any harm. But can he really change? Is the one who wants her dead even closer to home than she thought?', 'undefined', '2017-03-14', 'http://books.google.com/books/content?id=8AT0DQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '2,1', 0, '2017-12-05 07:12:06'),
(15, '', 'Gone Girl', 'Gillian Flynn', 'When a woman goes missing on her fifth wedding anniversary, her diary reveals hidden turmoil in her marriage, while her husband, desperate to clear himself of suspicion, realizes that something more disturbing than murder may have occurred.', '', '2014', 'http://books.google.com/books/content?id=mmWODQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '2,1', 0, '2017-12-05 07:12:38'),
(16, 'l6x0a-jkoGUC', 'Drive', 'Daniel H. Pink', 'Forget everything you thought you knew about how to motivate people - at work, at school, at home. It\'s wrong. As Daniel H. Pink explains in his new and paradigm-shattering book DRIVE: THE SURPRISING TRUTH ABOUT WHAT MOTIVATES US, the secret to high performance and satisfaction in today\'s world is the deeply human need to direct our own lives, to learn and create new things, and to do better by ourselves and our world. Drawing on four decades of scientific research on human motivation, Pink exposes the mismatch between what science knows and what business does - and how that affects every aspect of our lives. He demonstrates that while the old-fashioned carrot-and-stick approach worked successfully in the 20th century, it\'s precisely the wrong way to motivate people for today\'s challenges. In DRIVE, he reveals the three elements of true motivation: AUTONOMY - the desire to direct our own lives; MASTERY - the urge to get better and better at something that matters; PURPOSE - the yearning to do what we do in the service of something larger than ourselves. Along the way, he takes us to companies that are enlisting new approaches to motivation and introduces us to the scientists and entrepreneurs who are pointing a bold way forward. DRIVE is bursting with big ideas - the rare book that will change how you think and transform how you live.', 'Canongate Books', '2010-01-21', 'http://books.google.com/books/content?id=l6x0a-jkoGUC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '13', 0, '2017-12-05 07:12:30'),
(17, 'q5ZnDQAAQBAJ', 'Meddling Kids', 'Edgar Cantero', 'Four former kid detectives have grown up and apart, each haunted by disturbing memories of their final night in an old haunted house. The time has come to get the team back together, face their fears, and find out what actually happened all those years ago at Sleepy Lake.', 'Doubleday', '2017', 'http://books.google.com/books/content?id=IvmCvgAACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '5,1', 1, '2017-12-05 08:15:47'),
(18, 'ZYiIDAAAQBAJ', 'Revolution for Dummies', 'Bassem Youssef', '“Hilarious and Heartbreaking. Comedy shouldn’t take courage, but it made an exception for Bassem.” --Jon Stewart', 'HarperCollins', '2017-03-21', 'http://books.google.com/books/content?id=ZYiIDAAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '14', 0, '2017-12-05 08:15:11'),
(19, 'sIG-DQAAQBAJ', 'Dear Ijeawele, or A Feminist Manifesto in Fifteen Suggestions', 'Chimamanda Ngozi Adichie', 'An instant feminist classic, and perfect gift for all parents, women, and people working towards gender equality. Here is a brilliant, beautifully readable, and above all practical expansion of the ideas this iconic author began to explore in her bestselling manifesto, We Should All Be Feminists. A few years ago, Chimamanda Ngozi Adichie received a letter from a dear friend from childhood, asking how to raise her new baby girl a feminist. Although she has written and spoken out widely about feminism, Adichie wasn\'t sure how to advise her friend Ijeawele. But as a person who\'d babysat, had loved her nieces and nephews, and now, too, was the mother of a daughter herself, she thought she would try. So she sent Ijeawele a letter with some suggestions--15 in all--which she has now decided to share with the world. Compelling, direct, wryly funny, and perceptive, Dear Ijeawele offers specifics on how we can empower our daughters to become strong, independent women. Here, too, are ways parents can raise their children--both sons and daughters--beyond a culture\'s limiting gender prescriptions. This short, sharp work rings out in Chimamanda\'s voice: infused with deep honesty, clarity, strength, and above all love. She speaks to the important work of raising a girl in today\'s world, and provides her readers with a clear proposal for inclusive, nuanced thinking. Here we have not only a rousing manifesto, but a powerful gift for all people invested in the idea of creating a just society--an endeavour now more urgent and important than ever.', 'Knopf Canada', '2017-03-07', 'http://books.google.com/books/content?id=sIG-DQAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '15', 0, '2017-12-05 07:12:55'),
(20, 'TT9HDgAAQBAJ', 'From Here to Eternity: Traveling the World to Find the Good Death', 'Caitlin Doughty', 'The best-selling author of Smoke Gets in Your Eyes expands our sense of what it means to treat the dead with “dignity.” Fascinated by our pervasive fear of dead bodies, mortician Caitlin Doughty set out to discover how other cultures care for the dead. From Here to Eternity is an immersive global journey that introduces compelling, powerful rituals almost entirely unknown in America. In rural Indonesia, she watches a man clean and dress his grandfather’s mummified body, which has resided in the family home for two years. In La Paz, she meets Bolivian natitas (cigarette-smoking, wish-granting human skulls), and in Tokyo she encounters the Japanese kotsuage ceremony, in which relatives use chopsticks to pluck their loved-ones’ bones from cremation ashes. With boundless curiosity and gallows humor, Doughty vividly describes decomposed bodies and investigates the world’s funerary history. She introduces deathcare innovators researching body composting and green burial, and examines how varied traditions, from Mexico’s Días de los Muertos to Zoroastrian sky burial help us see our own death customs in a new light. Doughty contends that the American funeral industry sells a particular—and, upon close inspection, peculiar—set of “respectful” rites: bodies are whisked to a mortuary, pumped full of chemicals, and entombed in concrete. She argues that our expensive, impersonal system fosters a corrosive fear of death that hinders our ability to cope and mourn. By comparing customs, she demonstrates that mourners everywhere respond best when they help care for the deceased, and have space to participate in the process. Exquisitely illustrated by artist Landis Blair, From Here to Eternity is an adventure into the morbid unknown, a story about the many fascinating ways people everywhere have confronted the very human challenge of mortality.', 'W. W. Norton &amp; Company', '2017-10-03', 'http://books.google.com/books/content?id=TT9HDgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '14', 0, '2017-12-05 07:38:14'),
(21, 'Db_qDAAAQBAJ', 'Inferior', 'Angela Saini', 'Whether looking at intelligence or emotion, cognition or behavior, science has continued to tell us that men and women are fundamentally different. Biologists claim that women are better suited to raising families or are, more gently, uniquely empathetic. Men, on the other hand, continue to be described as excelling at tasks that require logic, spatial reasoning, and motor skills. But a huge wave of research is now revealing an alternative version of what we thought we knew. The new woman revealed by this scientific data is as strong, strategic, and smart as anyone else.', 'Beacon Press', '2017-05-30', 'http://books.google.com/books/content?id=Db_qDAAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '15,8', 0, '2017-12-05 11:11:30'),
(22, 'hy5bCwAAQBAJ', 'Everybody Lies', 'Seth Stephens-Davidowitz', 'By the end of an average day in the early twenty-first century, human beings searching the internet will amass eight trillion gigabytes of data. This staggering amount of information—unprecedented in history—can tell us a great deal about who we are—the fears, desires, and behaviors that drive us, and the conscious and unconscious decisions we make. From the profound to the mundane, we can gain astonishing knowledge about the human psyche that less than twenty years ago, seemed unfathomable. Everybody Lies offers fascinating, surprising, and sometimes laugh-out-loud insights into everything from economics to ethics to sports to race to sex, gender and more, all drawn from the world of big data.', 'HarperCollins', '2017-05-09', 'http://books.google.com/books/content?id=hy5bCwAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '15', 1, '2017-12-05 07:44:13'),
(23, 'FrXsTNgkEqgC', 'The Song of Achilles', 'Madeline Miller', 'Patroclus, an awkward young prince, has been exiled to the kingdom of Phthia. Here he is nobody, just another unwanted boy living in the shadow of King Peleus and his golden son, Achilles. Achilles, \'best of all the Greeks\', is everything Patroclus is not - strong, beautiful, the child of a goddess - and by all rights their paths should never cross. Yet one day, Achilles takes the shamed prince under his wing and soon their tentative companionship gives way to a steadfast friendship. As they grow into young men skilled in the arts of war and medicine, their bond blossoms into something far deeper - despite the displeasure of Achilles\'s mother Thetis, a cruel and deathly pale sea goddess with a hatred of mortals. Fate is never far from the heels of Achilles. When word comes that Helen of Sparta has been kidnapped, the men of Greece are called upon to lay siege to Troy in her name. Seduced by the promise of a glorious destiny, Achilles joins their cause, Torn between love and fear for his friend, Patroclus follows Achilles into war, little knowing that the years that follow will test everything they have learned, everything they hold dear. And that, before he is ready, he will be forced to surrender his friend to the hands of Fate. Profoundly moving and breathtakingly original, this rendering of the epic Trojan War is a dazzling feat of the imagination, a devastating love story, and an almighty battle between gods and kings, peace and glory, immortal fame and the human heart.', 'A&amp;C Black', '2011-09-05', 'http://books.google.com/books/content?id=FrXsTNgkEqgC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '16,17,1', 1, '2017-12-05 07:45:12'),
(24, '6XXzjgEACAAJ', 'The Odyssey', 'Homer', 'The Odyssey is one of two major ancient Greek epic poems attributed to Homer. It is, in part, a sequel to the Iliad, the other work ascribed to Homer. The poem is fundamental to the modern Western canon, and is the second oldest extant work of Western literature, the Iliad being the oldest. It is believed to have been composed near the end of the 8th century BC, somewhere in Ionia, the Greek coastal region of Anatolia. Includes unique illustrations.', 'undefined', '2015-11-08', 'http://books.google.com/books/content?id=6XXzjgEACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '16,18', 0, '2017-12-05 07:12:28'),
(25, 'CmDQ0pcc_lQC', 'Hercules', 'Bernard Evslin', 'Greek mythology’s mightiest hero faces the world’s most fearsome beasts, monsters, and demons Hercules, the son of Zeus and a mortal woman, was the greatest of the Greek heroes and the strongest man on earth. Three times as big as his fully mortal twin, and imbued with extraordinary courage and ingenuity, Hercules began his remarkable feats while still in the cradle. Zeus’s wife, the goddess Hera, jealously schemed to kill Hercules, but the resourceful half-man, half-god escaped her traps and accomplished seemingly impossible tasks. Renowned mythologist Bernard Evslin recounts the famous twelve labors of Hercules, as the warrior tries to break Hera’s curse by facing down the Nemean Lion, killing the many-headed Hydra, outwitting the giant Anteus, and more.', 'Open Road Media', '2012-10-30', 'http://books.google.com/books/content?id=CmDQ0pcc_lQC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9,16,19', 0, '2017-12-05 07:12:47'),
(26, 't34-jgEACAAJ', 'Simon vs. the Homo Sapiens Agenda', 'Becky Albertalli', 'William C. Morris Award Finalist A National Book Award Longlist Title Everybody is talking about Simon vs. the Homo Sapiens Agenda!', 'Balzer + Bray', '2016-06-07', 'http://books.google.com/books/content?id=t34-jgEACAAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;source=gbs_api', '6,17,19', 0, '2017-12-05 08:12:47'),
(27, 'aZyGtcC3SLgC', 'Baudelaire: Les Fleurs Du Mal', 'F. W. Leakey', 'Les Fleurs du Mal, once the most infamous book of poems in French literature, has in this century become the most famous and the most admired, owing its', 'Cambridge University Press', '1992-04-09', 'http://books.google.com/books/content?id=aZyGtcC3SLgC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '11,20', 0, '2017-12-05 08:12:21'),
(28, 'dzg6tOijdSgC', 'Selected Poems and Letters', 'Arthur Rimbaud', 'A phenomenonally precicious schoolboy, Rimbaud was still a teenager when he became notorious as Europe\'s most shocking and exhilarating poet. During his brief 5-year reign as the enfant terrible of French literature he produced an extraordinary body of poems that range from the exquisite to the obsene, while simultaneously living a life of dissolute excess with his lover and fellow poet, Verlaine. At the age of 21, he abandonned poetry and travelled across Europe before settling in Africa as an arms trader. This edition sets the two sides of Rimbaud side by side with a sparkling translation of his most exhilarating poetry and a generous selection of the letters from the harsh and colourful period of his life as a colonial trader.', 'Penguin UK', '2004-09-02', 'http://books.google.com/books/content?id=dzg6tOijdSgC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '11,21', 0, '2017-12-05 08:12:25'),
(29, 'PqR4UGsW_DcC', 'Iron Man', 'Warren Ellis', 'Renowned scribe Warren Ellis joins forces with acclaimed illustrator Adi Granov to redefine the armored avenger\'s world for the 21st century - a landscape of terrifying new technologies that threaten to overwhelm fragile mankind! What is Extremis, who has unleashed it, and what does its emergence portend for the world? Collects Iron Man (2004) #1-6.', 'Marvel Entertainment', '2010-04-14', 'http://books.google.com/books/content?id=PqR4UGsW_DcC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9', 0, '2017-12-05 10:12:12'),
(31, 't436CgAAQBAJ', 'Armor Wars', 'Marvel Comics', 'Armor Wars 1-5, Armor Wars 1/2', 'Marvel Entertainment', '2016-01-27', 'http://books.google.com/books/content?id=t436CgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9', 0, '2017-12-05 10:12:19'),
(32, 'c9VrzasXCAIC', 'Spider-Man', 'Bob Gale', 'Spider-Man\'s Brand New Day continues, with more all-new adventures. Peter confronts major changes at the Daily Bugle while New York is under siege by a blizzard, and a new villain, Freak, rampages through town. If he hopes to stand a chance against this new threat, Spider-Man is going to have to enlist the help of his New Avengers teammates as well as the mysterious, all-new adventurer, Jackpot! Collects Amazing Spider-Man (1999) #552-558.', 'Marvel Entertainment', '2008-12-31', 'http://books.google.com/books/content?id=c9VrzasXCAIC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9', 0, '2017-12-05 10:12:05'),
(33, 'A416CgAAQBAJ', 'Doctor Strange', 'Roger Stern', 'Flames of the Faltine! Is it getting hot in here, or is it just Mephisto? When Doctor Strange joins Reed and Sue Richards in battle with the Lord of Lies, the enchanting sorceress Topaz is freed from hell. But half her soul remains in torment. Can Strange complete her, or will he fall prey first to a siren\'s song? Or perhaps to a feral feline demon? With a key part of his costume clawed to pieces, Stephen\'s going to need a new Cloak, but when the unholy Urthona strikes, he might need a new body too! The old saying goes,', 'Marvel Entertainment', '2015-10-07', 'http://books.google.com/books/content?id=A416CgAAQBAJ&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;edge=curl&amp;source=gbs_api', '9', 0, '2017-12-05 10:12:37');

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
(2, 'Thriller'),
(3, 'Fantasy'),
(4, 'Performing Arts'),
(5, 'Horror'),
(6, 'Romance'),
(7, 'Sci-fi'),
(8, 'Science'),
(9, 'BD &amp; comics'),
(10, 'Humor'),
(11, 'Poetry'),
(12, 'Young Adult Fiction'),
(13, 'Business &amp; Economics'),
(14, 'Biography &amp; Autobiography'),
(15, 'Social Science'),
(16, 'Mythology'),
(17, 'LGBT'),
(18, 'History'),
(19, 'Juvenile Fiction'),
(20, 'Literary Criticism'),
(21, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `salons_id` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `users_id`, `salons_id`, `message`, `timestamp`) VALUES
(1, 3, 4, 'You know what a vole is, Morty? You know what a vole is? Sum-Sum, let’s go! Grandpa’s concern for your safety is fleeting! Cause he roped me into this! That just sounds like slavery with extra steps.', '2017-12-02 05:00:00'),
(2, 4, 4, 'Your blood will be my lotion! Meeseeks don\'t usually have to exist for this long. It\'s gettin\' weeeiiird. Oh, that\'s Million Ants. I can\'t see the ants from over here, I just assumed that was um.. Turd Man, Wiggly Turd Man. Nothing to read into there!', '2017-12-05 08:31:06'),
(3, 1, 4, 'Nobody\'s killing me until after I catch my wife with another man. My name is Slip- Slippery Stair. I\'ll take ya down there for 25 shmeckels! It probably has space aids. Ew, Grandpa, so gross! You\'re talking about my mom!', '2017-12-05 08:31:53'),
(4, 3, 4, 'They\'ll just fall right out of my ass! I\'ve done this too many times! Why\'d you even rope me into this?! Oh, I\'m sorry Morty, are you the scientist or are you the kid who wanted to get laid?', '2017-12-05 08:31:06'),
(5, 4, 3, 'Flip the pickle over. You don\'t have to try to impress me Morty. Don\'t even trip about your pants, dawg. We got an extra pair right here. You don\'t know me!', '2017-12-05 08:34:55'),
(6, 5, 3, 'Who cares, Morty? Global acts of terrorism happen every day. Uh, here\'s something that\'s never happened before—I\'m a pickle! I\'m Pickle Ri-i-i-ick! You’re like Hitler, but even Hitler cared about Germany or something. There is no god, Summer; gotta rip that band-aid off now you\'ll thank me later. Hello Jerry, come to rub my face in urine again?\r\n\r\n', '2017-12-05 08:34:55'),
(7, 3, 3, 'Rikitikitavi, bitch! What are you looking at, mother fucker! I\'m the Devil, what should I do when I fail? Give myself an ice cream? You have to turn them on Morty! The shoes need to be turned on!\r\n\r\n', '2017-12-05 08:34:55'),
(8, 4, 3, 'Yea and I made the stars that became the carbon in your mothers ovaries! Is he keeping his shoulders square? Oooooooh he\'s tryin\'! Don\'t be a baby! You avoid getting shot in real life all the time, Morty! Just do the same thing here and we\'ll be fine! The trick to cereal is keeping 70% of it above the milk.', '2017-12-05 08:34:55'),
(9, 5, 3, 'You don\'t have to try to impress me Morty. I\'m sorry Summer, your opinion means very little to me. I\'m Mr. Crowbar, and here is my friend, who is also a crowbar! The trick to cereal is keeping 70% of it above the milk.', '2017-12-05 08:34:55'),
(10, 6, 2, 'God? God\'s turning people into insect monsters Beth. I\'m the one beating them to death. Thank me. This isn\'t Game of Thrones, Morty. Are you hungry for apples? ARE YOU HUNGRY FOR APPLESSS!? Wow I really crononberg\'d up the whole place huh Morty, just a bunch a cronenbergs walkin around.', '2017-12-05 08:36:08'),
(11, 7, 2, 'Wha, me irresponsible ?! All I wanted you to do was to hand me a screwdriver, Morty! There is no god, Summer; gotta rip that band-aid off now you\'ll thank me later. Existence is pain to a meeseeks Jerry, and we will do anything to alleviate that pain. They\'re not infinite universes left in sync with the show.\r\n\r\n', '2017-12-05 08:36:30'),
(12, 5, 2, 'Listen, Morty, I hate to break it to you but what people call "love" is just a chemical reaction that compels animals to breed. It hits hard, Morty, then it slowly fades, leaving you stranded in a failing marriage. I did it. Your parents are gonna do it. Break the cycle, Morty. Rise above. Focus on science. You gotta shove these seeds way up your butt Morty, waay up there. "And"? What more do you want tacked on to this? I turned myself into a pickle, and 9/11 was an inside job?" You know what a vole is, Morty? You know what a vole is?\r\n\r\n', '2017-12-05 08:36:30'),
(13, 7, 1, 'Yea. If you spend all day shuffling words around you can make anything sound bad, Morty. Awwww thanks, bitch! Oh no. I\'m late to class, bitch. I can finally go on that trip I\'ve been talking about.\r\n\r\n', '2017-12-05 08:37:50'),
(14, 6, 1, 'I\'m not looking for judgement, just a yes or no. Can you assimilate a giraffe? Wow I really crononberg\'d up the whole place huh Morty, just a bunch a cronenbergs walkin around. Cool. Just stay in the driveway; the kill-bots are live, and I took you off the whitelist. We need a hang glider, and a crotch less uncle sam costume, and I want the entire field of your largest stadium covered end to end with naked red heads, and I want the stands packed with every man that remotely resembles my father.\r\n\r\n', '2017-12-05 08:37:50'),
(15, 4, 1, 'He\'s not a hot girl. He can\'t just bail on his life and set up shop in someone else\'s. What is this, 90\'s Conan? Let’s be post-apocalyptic scavengerrrrsss! Hello Jerry, come to rub my face in urine again?\r\n\r\n', '2017-12-05 08:37:50'),
(16, 5, 1, 'Okay, take it easy Rick. T-that\'s dark. I don\'t like it here Morty. I can\'t abide bureaucracy. I don\'t like being told where to go and what to do. I consider it a violation. Did you get those seeds all the way up your butt? I\'ve replaced them both as the de facto patriarch of your family and your universe. Your mom wouldn\'t have accepted me if I came home without you and your sister, so now you know the real reason I rescued you. I just took over the family, Morty! And if you tell your mom or sister I said any of this, I\'ll deny it, and they\'ll take my side because I\'m a hero, Morty! And now you\'re gonna have to go and do whatever I say, Morty! Forever!\r\n\r\n', '2017-12-05 08:37:50'),
(17, 7, 4, ' An-and I-I-I\'ll go out and I\'ll find some more of that Mulan szechuan teriyaki dipping sauce, Morty! Th-b-because that\'s what this is all about Morty! Th-that\'s my one-armed man! I\'m not driven by avenging my dead family, Morty, that was fake! I-I-I\'m driven by finding that mcnuggut sauce! I want that Mulan mcnuggut sauce, Morty! That\'s my series arc, Morty! If it takes nine seasons, I want my mcnuggut dipping sauce szechuan sauce, Morty! That\'s what\'s gon-it\'s gonna take us all the way to the end, Morty! Season nine more seasons, Morty! Nine more seasons until I get that dipping szechuan sauce! For ninety-seven more years, Morty! I want that mcnuggut sauce Morty! Wow I really crononberg\'d up the whole place huh Morty, just a bunch a cronenbergs walkin around.', '2017-12-05 08:37:50'),
(18, 7, 10, 'Dont look at me! That guy over there roped me into this. I love morty and i hope morty loves me. I want to wrap my arms around him and feel him deep inside me. Aw, man! I really liked this life! Well, at least I didn\'t really crap my pants. You want to see my first boner, or should we go straight to the moment I discovered interdimensional travel?\r\n\r\n', '2017-12-05 08:40:28'),
(19, 4, 10, 'Rick, the only connection between your unquestionable intelligence and the sickness destroying your family is that everyone in your family, you included, use intelligence to justify sickness. You seem to alternate between viewing your own mind as an unstoppable force and as an inescapable curse. And I think it\'s because the only truly unapproachable concept for you is that it\'s your mind within your control. You chose to come here, you chose to talk to belittle my vocation, just as you chose to become a pickle.', '2017-12-05 08:40:28'),
(20, 6, 10, 'You are the master of your universe, and yet you are dripping with rat blood and feces. Your enormous mind literally vegetating by your own hand. I have no doubt that you would be bored senseless by therapy, the same way I\'m bored when I brush my teeth and wipe my ass. Because the thing about repairing, maintaining, and cleaning is it\'s not an adventure. There\'s no way to do it so wrong you might die.', '2017-12-05 08:40:28'),
(21, 5, 10, 'It\'s just work. And the bottom line is, some people are okay going to work, and some people... well, some people would rather die. Each of us gets to choose. Yo! What up my glip glops! If anything happened to you I would kill myself! I love you bad, bobo! What, I\'m gonna touch it, and you\'re gonna tell me it\'s an alien dick or something?', '2017-12-05 08:40:28'),
(22, 7, 10, 'We don\'t whitewash it either, Morty. I mean, the pirates are really rapey. I\'m sorry Summer, your opinion means very little to me. Why\'d you even rope me into this?! I mixed in some praying mantis DNA. You know a praying mantis is the exact opposite of a vole, Morty? They mate once and then bluergh cut each other\'s heads off.\r\n\r\n', '2017-12-05 08:40:28');

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
(1, 12, '1', 'Sunt libero sint similique voluptatum aut est sed esse cupidatat', 'My sister died in the spaghetti. I love morty and i hope morty loves me. I want to wrap my arms around him and feel him deep inside me. I took your family? Who do you think had taken more from them when you shot 2 Your failures are your own, old man! I say, follow throooough!', '2017-12-05 08:12:09'),
(2, 12, '6', 'No relation. S-S-Samantha. I am not putting my father in a home!', 'Well, she\'s my daughter, Summer. I outrank you. Or, family means nothing, in which case, don\'t play that card. This is Principal Vagina. No relation. S-S-Samantha. I am not putting my father in a home! He just came back into my life, and you want to, grab him and, stuff him under a mattress like last month\'s Victoria\'s Secret?!', '2017-12-05 08:12:08'),
(3, 13, '6', 'Get your shit together.', 'Well then get your shit together. Get it all together and put it in a backpack, all your shit, so it\'s together. ...and if you gotta take it somewhere, take it somewhere ya know? Take it to the shit store and sell it, or put it in a shit museum. I don\'t care what you do, you just gotta get it together... Get your shit together. Hi! I\'m Mr Meeseeks! Look at me! You know my name, that\'s disarming. Right, Crocubot. So, you\'re half cold unfeeling reptile, half also cold equally unfeeling machine?', '2017-12-05 08:12:22'),
(4, 13, '6', 'Get your shit together.', 'Well then get your shit together. Get it all together and put it in a backpack, all your shit, so it\'s together. ...and if you gotta take it somewhere, take it somewhere ya know? Take it to the shit store and sell it, or put it in a shit museum. I don\'t care what you do, you just gotta get it together... Get your shit together. Hi! I\'m Mr Meeseeks! Look at me! You know my name, that\'s disarming. Right, Crocubot. So, you\'re half cold unfeeling reptile, half also cold equally unfeeling machine?', '2017-12-05 08:12:24'),
(5, 28, '2', 'I am Mr. Booby Buyer.', 'You can run, but you can\'t hide bitch! The fucking amish bitch shot me! You\'re talking about Inception? Hi! Principal Vagina: the name\'s real, possibly Scandinavian.', '2017-12-05 10:12:43'),
(6, 17, '5', 'Meeseeks don\'t usually have to exist for this long.', 'He\'s not a hot girl. He can\'t just bail on his life and set up shop in someone else\'s. They\'ll just fall right out of my ass! I\'ve done this too many times! Morty, I\'m a drunk, not a hack. Is he keeping his shoulders square? Oooooooh he\'s tryin\'!', '2017-12-05 11:12:28'),
(7, 17, '4', 'Ohh yea, you gotta get schwifty.', 'I don\'t think we can perform our new song, The Recipe For Concentrated Dark Matter for a crowd this tiny! Get off the high road Summer. We all got pink eye because you wouldn\'t stop texting on the toilet. And now, human music. boop beep boop... boop beep boop...', '2017-12-05 11:12:07');

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
(1, 25, '1', 0, '2017-11-12 03:00:00'),
(2, 20, '1', 0, '2017-11-19 03:00:00'),
(3, 18, '1', 0, '2017-11-26 03:00:00'),
(4, 13, '1,3,4,6', 0, '2017-12-03 03:00:00'),
(6, 12, '1,2,7,5', 0, '2017-12-10 03:00:00'),
(7, 17, '', 0, '2017-12-17 03:00:00'),
(8, 5, '', 0, '2017-12-24 03:00:00'),
(10, 6, '1', 0, '2017-11-05 02:00:00');

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
(1, 'mlucelucas', '$2y$10$h7X6nvkAGYAj.4hqPaFl4eOncR.S21lzKKDmnA4PIDvUDVGQ6VWEa', 'mathildelucelucas@gmail.com', 'I felt a queasy mixture of relief and horror: when you finally stop an itch and realize it’s because you’ve ripped a hole in your skin.', '/view/assets/img/users/mlucelucas_5a26448d08b0c.jpg', 1, '2017-12-05 06:12:14'),
(2, 'demo', '$2y$10$xZRSe4OK7zQ1mQejLHOcvekXadLMwNZC0w4d036rLmL/9qv8M.SWe', 'admin@admin', 'Compte demo pour l\'admin', '/view/assets/img/users/demo_5a2644d872eec.jpg', 1, '2017-12-05 07:12:10'),
(3, 'user1', '$2y$10$UxyGvnmkXX7c7mO03dpR6u2DFKTbTBZW543zVGRM.8ZjTHOvKTc2W', 'user1@email', 'Only the very weak-minded refuse to be influenced by literature and poetry.', '/view/assets/img/users/user1_5a2645462d011.jpg', 0, '2017-12-05 07:12:17'),
(4, 'user2', '$2y$10$HbKCldqOshKWEU8ezJf98OWl2kHKA4tOgnyGrRp6Cz5UdlYCs9owq', 'user2@email', 'The mind is its own place, and in itself can make a heaven of hell, a hell of heaven.', '/view/assets/img/users/user2_5a2645de07a15.jpg', 0, '2017-12-05 07:12:04'),
(5, 'user3', '$2y$10$QBhCytd0.P.lgSmKJXekHOm/38RSojf6F3u8dVOOl5tYO/HdiFz0O', 'user3@email', 'There is no friend as loyal as a book.', '/view/assets/img/users/user3_5a26464659840.jpg', 0, '2017-12-05 07:12:34'),
(6, 'user4', '$2y$10$rwuCfcURlQl9hUyMZ0nZhuwCp6i52uusEHTpX9M5KBuW3L9DyzCCe', 'user4@email', 'A thing is not necessarily true because a man dies for it.', '/view/assets/img/users/user4_5a2646aab2fc9.jpg', 0, '2017-12-05 07:12:15'),
(7, 'user5', '$2y$10$rNoZq2BDCmB8t/Ra.VFFLOW1RcAdatM9chBBS2ffDyRC0..MSMphC', 'user5@email', 'There is neither happiness nor misery in the world; there is only the comparison of one state with another, nothing more. He who has felt the deepest grief is best able to experience supreme happiness. We must have felt what it is to die, Morrel, that we ', '/view/assets/img/users/user5_5a26470c0c3d6.jpg', 0, '2017-12-05 07:12:55');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;