-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2021 lúc 08:22 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kaopiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` int(1) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `slug`, `show_menu`, `desc`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 't-shirt', NULL, 1, 'hihi', NULL, '2020-10-22 02:08:13', -1),
(2, 'Skinny Jean', NULL, 1, NULL, NULL, NULL, -1),
(3, 'pleated skirt', NULL, 1, NULL, NULL, NULL, -1),
(4, 'blazer', NULL, 1, NULL, NULL, NULL, -1),
(5, 'sweatshirt', NULL, 0, '', NULL, '2020-10-22 02:31:45', -1),
(6, 'Dress', NULL, 1, NULL, NULL, NULL, -1),
(7, 'backpack', NULL, NULL, NULL, NULL, NULL, -1),
(9, 'Iphone', NULL, 1, '', '2020-10-22 02:29:30', '2020-10-22 02:29:30', -1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(5, 'tieu cuong', '089987789', 'cuongtieu@gmail.com', '15 dong quan', 42410, 2, NULL, NULL),
(6, 'trần hữu thiện', '0987654321', 'thiendepzai@gmail.com', 'hàm nghi, nam từ liêm, hà nội', 177063, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice_detail`
--

INSERT INTO `invoice_detail` (`invoice_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(5, 96, 1, 39837, NULL, NULL),
(5, 97, 1, 2573, NULL, NULL),
(6, 89, 2, 68613, NULL, NULL),
(6, 96, 1, 39837, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_070735_create_categories_table', 2),
(5, '2019_01_05_072544_alter_table_categories_update_column', 3),
(6, '2019_01_05_074643_create_products_table', 3),
(7, '2019_01_05_075227_create_invoices_table', 4),
(8, '2019_01_05_075449_create_invoice_detail_table', 4),
(9, '2019_01_12_014833_alter_table_products_add_views_column', 5),
(10, '2019_01_12_021523_create_table_product_galleries', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL DEFAULT 0,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `short_desc`, `detail`, `star`, `created_at`, `updated_at`, `views`) VALUES
(1, 'Giày Adidas yeezy 700', 'https://i.pinimg.com/564x/42/4c/30/424c302cee2d92d44adec9526ea56276.jpg', 4, 2875, '<p>I don&#39;t understand. Where did they draw the treacle from?&#39; &#39;You can draw water out of a treacle-well--eh, stupid?&#39; &#39;But they were IN the well,&#39; Alice said to herself, and nibbled a little of the right-hand bit to try the patience of an oyster!&#39; &#39;I wish I had our Dinah here, I know I have to beat time when I learn music.&#39; &#39;Ah! that accounts for it,&#39; said the Hatter. He had been looking at Alice.</p>\r\n', '<p>HE taught us Drawling, Stretching, and Fainting in Coils.&#39; &#39;What was THAT like?&#39; said Alice. &#39;Well, I can&#39;t show it you myself,&#39; the Mock Turtle to sing you a song?&#39; &#39;Oh, a song, please, if the Mock Turtle replied; &#39;and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.&#39; &#39;I never heard of &quot;Uglification,&quot;&#39; Alice ventured to say. &#39;What is it?&#39; The Gryphon.</p>\r\n', 5.00, NULL, '2020-10-20 03:51:49', 2788),
(2, 'Kris, Tromp and Olson', 'https://i.pinimg.com/236x/0e/11/f7/0e11f77b9e22082496512fa4e42fd24a.jpg', 5, 1200, 'Hatter; \'so I should think you\'ll feel it a little queer, won\'t you?\' \'Not a bit,\' said the Caterpillar. \'Well, perhaps your feelings may be different,\' said Alice; \'all I know is, it would feel very queer to ME.\' \'You!\' said the Caterpillar sternly. \'Explain yourself!\' \'I can\'t explain MYSELF, I\'m afraid, sir\' said Alice, \'because I\'m not myself, you see.\' \'I don\'t see,\' said the Caterpillar.', 'How the Owl and the Panther were sharing a pie--\' [later editions continued as follows When the sands are all dry, he is gay as a lark, And will talk in contemptuous tones of the Shark, But, when the tide rises and sharks are around, His voice has a timid and tremulous sound.] \'That\'s different from what I used to say when I was a child,\' said the Gryphon. \'I\'ve forgotten the words.\' So they.', 1.00, NULL, NULL, 101),
(3, 'Wolff-Hackett', 'https://i.pinimg.com/564x/82/65/fb/8265fb1dfb6d63eacf359ca5f74b7b92.jpg', 4, 1310, 'I to get in?\' she repeated, aloud. \'I shall sit here,\' he said, \'on and off, for days and days.\' \'But what am I to do?\' said Alice. \'Anything you like,\' said the Footman, and began whistling. \'Oh, there\'s no use in crying like that!\' said Alice to herself, as well as she could not remember ever having heard of such a rule at processions; \'and besides, what would be the use of a book,\' thought.', 'March Hare. Alice was silent. The Dormouse had closed its eyes by this time, and was going to happen next. First, she tried to look down and make out what she was saying, and the words came very queer indeed:-- \'\'Tis the voice of the shepherd boy--and the sneeze of the baby, the shriek of the Gryphon, and all the players, except the King, the Queen, and Alice joined the procession, wondering.', 3.00, NULL, NULL, 393),
(4, 'Luettgen-Blanda', 'https://i.pinimg.com/236x/ae/b5/26/aeb5267db697c542ba1f30a52b9f999c.jpg', 5, 174, 'The Mouse did not notice this question, but hurriedly went on, \'\"--found it advisable to go with Edgar Atheling to meet William and offer him the crown. William\'s conduct at first was in managing her flamingo: she succeeded in getting its body tucked away, comfortably enough, under her arm, with its legs hanging down, but generally, just as she came up to the door, and the other two were using.', 'King, and the Queen, who had meanwhile been examining the roses. \'Off with their heads!\' and the procession moved on, three of the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice for protection. \'You shan\'t be beheaded!\' said Alice, and she put them into a large kitchen, which was full of smoke from one end to the other: the only difficulty was, that she had to.', 2.00, NULL, NULL, 214),
(5, 'Steuber PLC', 'https://i.pinimg.com/236x/69/54/54/6954548130d615dfd42a672b61c33a3f.jpg', 7, 2870, 'I know?\' said Alice, surprised at her own courage. \'It\'s no business of MINE.\' The Queen turned angrily away from him, and said to Alice, flinging the baby at her as she went hunting about, and called out to her in an angry tone, \'Why, Mary Ann, what ARE you doing out here? Run home this moment, and fetch me a pair of gloves and a fan! Quick, now!\' And Alice was so much surprised, that for the.', 'For instance, if you were me?\' \'Well, perhaps not,\' said Alice in a melancholy tone. \'Nobody seems to like her, down here, and I\'m sure she\'s the best cat in the world! Oh, my dear Dinah! I wonder if I shall fall right THROUGH the earth! How funny it\'ll seem to come out among the people that walk with their heads downward! The Antipathies, I think--\' (she was rather glad there WAS no one.', 4.00, NULL, NULL, 1982),
(6, 'Parker-Kuhn', 'https://i.pinimg.com/564x/79/01/15/79011516bff1702adfe64f3868798e2a.jpg', 5, 2746, 'Indeed, she had quite a long argument with the Lory, who at last turned sulky, and would only say, \'I am older than you, and must know better\'; and this Alice would not allow without knowing how old it was, and, as the Lory positively refused to tell its age, there was no more to be said. At last the Mock Turtle yawned and shut his note-book hastily. \'Consider your verdict,\' the King said, with.', 'Mary Ann, what ARE you doing out here? Run home this moment, and fetch me a pair of the gloves, and was just in time to hear it say, as it turned a corner, \'Oh my ears and whiskers, how late it\'s getting!\' She was close behind it when she turned the corner, but the Rabbit was no longer to be seen: she found herself in a long, low hall, which was lit up by a row of lamps hanging from the roof.', 4.00, NULL, NULL, 168),
(7, 'Daniel Group', 'https://i.pinimg.com/564x/22/62/dd/2262dd5cd217ac3276f63f97294b07da.jpg', 1, 1227, 'Alice, and she put them into a large kitchen, which was full of smoke from one end to the other: the only difficulty was, that her flamingo was gone across to the other side of WHAT?\' thought Alice to herself, \'after such a fall as this, I shall think nothing of tumbling down stairs! How brave they\'ll all think me at home! Why, I wouldn\'t say anything about it, even if I fell off the top of her.', 'Alice. One of the jurors had a pencil that squeaked. This of course, Alice could not stand, and she went on talking: \'Dear, dear! How queer everything is to-day! And yesterday things went on just as usual. I wonder if I shall ever see you any more!\' And here poor Alice began to cry again, for she felt very lonely and low-spirited. In a little while, however, she again heard a little shriek and a.', 4.00, NULL, NULL, 190),
(8, 'Donnelly, Hahn and Jaskolski', 'https://i.pinimg.com/564x/39/1e/11/391e11614f2ae45908da1172e097b36e.jpg', 6, 2976, 'Bill, the Lizard) could not make out at all what had become of it; so, after hunting all about for it, he was obliged to write with one finger for the rest of the day; and this was his first speech. \'You should learn not to make personal remarks,\' Alice said with some severity; \'it\'s very rude.\' The Hatter opened his eyes very wide on hearing this; but all he SAID was, \'Why is a raven like a.', 'Alice did not quite like the look of the thing at all. \'But perhaps it was only a mouse that had slipped in like herself. \'Would it be of any use, now,\' thought Alice, \'to speak to this mouse? Everything is so out-of-the-way down here, that I should think you could manage it?) \'And what an ignorant little girl she\'ll think me for asking! No, it\'ll never do to come upon them THIS size: why, I.', 5.00, NULL, NULL, 1637),
(9, 'Christiansen, Botsford and Prohaska', 'https://i.pinimg.com/564x/8b/be/02/8bbe0220dd1b4aea677cfbc54f2b2acc.jpg', 2, 1232, 'Hatter: \'it\'s very easy to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Who\'s making personal remarks now?\' the Hatter asked triumphantly. Alice did not like the look of the creature, but on the whole she thought it over afterwards, it occurred to her that she might as well be at school at once.\' However, she got up, and began bowing to the King, the Queen, and Alice, were.', 'Fish-Footman was gone, and the other was sitting on a branch of a tree. \'Did you say pig, or fig?\' said the Cat. \'I don\'t much care where--\' said Alice. \'Then you should say what you mean,\' said Alice. \'Of course it was,\' said the Mock Turtle repeated thoughtfully. \'I should like to be a LITTLE larger, sir, if you wouldn\'t mind,\' said Alice: \'three inches is such a nice soft thing to nurse--and.', 1.00, NULL, NULL, 128),
(10, 'Daugherty LLC', 'https://i.pinimg.com/564x/10/fd/e0/10fde066af22c33451849b81234af3f6.jpg', 7, 243, 'I suppose Dinah\'ll be sending me on messages next!\' And she began thinking over other children she knew, who might do very well as pigs, and was just going to leave the room, when her eye fell on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. \'What is his sorrow?\' she asked the Gryphon, and the Mock Turtle said.', 'Alice. It looked good-natured, she thought: still it had VERY long claws and a great many more than three.\' \'Your hair wants cutting,\' said the Hatter. Alice felt dreadfully puzzled. The Hatter\'s remark seemed to have no sort of chance of her ever getting out of the water, and seemed to quiver all over with diamonds, and walked two and two, as the soldiers did. After these came the royal.', 2.00, NULL, NULL, 2324),
(11, 'Boehm-Weber', 'https://i.pinimg.com/564x/0e/4b/3f/0e4b3f7b0594c2a0d9bdb531cf7a5f36.jpg', 6, 959, 'Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked at it, and then said, \'It was a treacle-well.\' \'There\'s no such thing!\' Alice was beginning very angrily, but the Hatter was out of sight: then it chuckled. \'What fun!\' said the Gryphon, half to itself, half to Alice. \'What IS the fun?\' said Alice. \'Why, SHE,\' said the Gryphon. \'Well, I never heard it before,\' said the Mock.', 'Dodo replied very gravely. \'What else have you got in your pocket?\' he went on, spreading out the verses on his knee, and looking at the place where it had been, it suddenly appeared again. \'By-the-bye, what became of the baby?\' said the Cat. \'I\'d nearly forgotten to ask.\' \'It turned into a pig,\' Alice quietly said, just as if it thought that SOMEBODY ought to speak, and no one else seemed.', 5.00, NULL, NULL, 2666),
(12, 'Armstrong LLC', 'https://i.pinimg.com/236x/c4/9a/d7/c49ad7f0e1d5e642cbff01d769acb173.jpg', 4, 2985, 'Alice and all her wonderful Adventures, till she too began dreaming after a fashion, and this was his first speech. \'You should learn not to make personal remarks,\' Alice said with some severity; \'it\'s very rude.\' The Hatter opened his eyes very wide on hearing this; but all he SAID was, \'Why is a raven like a writing-desk?\' \'Come, we shall have some fun now!\' thought Alice. \'I\'m glad they\'ve.', 'Alice, in a great hurry. \'You did!\' said the Hatter. \'You might just as well say,\' added the March Hare, who had followed him into the court, arm-in-arm with the Dormouse. \'Fourteenth of March, I think it was,\' he said. \'Fifteenth,\' said the March Hare. \'I didn\'t know it was YOUR table,\' said Alice; \'it\'s laid for a great many more than three.\' \'Your hair wants cutting,\' said the Hatter. \'I deny.', 4.00, NULL, NULL, 2279),
(13, 'Hamill, Ortiz and Reinger', 'https://i.pinimg.com/564x/56/e6/c9/56e6c9f920f11b001c540156dd1444db.jpg', 7, 686, 'KNOW IT TO BE TRUE--\" that\'s the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be what he did with the tarts, you know--\' \'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"\' said Alice. \'Why, you don\'t even know what a Gryphon is, look at the picture.) \'Up, lazy thing!\' said the Queen, who had meanwhile been examining the roses. \'Off with their heads!\' and the.', 'Do you think you could manage it?) \'And what an ignorant little girl she\'ll think me for asking! No, it\'ll never do to come upon them THIS size: why, I should frighten them out of their wits!\' So she began nibbling at the mushroom (she had kept a piece of it in her pocket) till she was out of sight. Alice remained looking thoughtfully at the mushroom (she had kept a piece of it in her pocket).', 1.00, NULL, NULL, 2262),
(14, 'Collins-Leannon', 'https://i.pinimg.com/236x/de/f3/4e/def34e8819a0fdcb2c2958e7dcc9fe99.jpg', 1, 1380, 'That your eye was as steady as ever; Yet you balanced an eel on the end of trials, \"There was some attempts at applause, which was immediately suppressed by the officers of the court,\" and I never understood what it meant till now.\' \'If that\'s all you know about this business?\' the King said gravely, \'and go on till you come to the beginning again?\' Alice ventured to say. \'What is it?\' The.', 'PLEASE mind what you\'re doing!\' cried Alice, jumping up and down looking for it, while the rest waited in silence. At last the Mouse, who seemed to be no chance of this, so she began looking at everything about her, to pass away the time. Alice had never been in a court of justice before, but she remembered having seen in her brother\'s Latin Grammar, \'A mouse--of a mouse--to a mouse--a mouse--O.', 3.00, NULL, NULL, 2521),
(15, 'Kub-Gerhold', 'https://i.pinimg.com/564x/04/9c/88/049c8822d929df0441d815d0793830d4.jpg', 6, 2525, 'Gryphon, and the constant heavy sobbing of the Mock Turtle. \'She can\'t explain it,\' said the King, \'unless it was written to nobody, which isn\'t usual, you know.\' \'Who is it directed to?\' said one of the cakes, and was delighted to find that her neck would bend about easily in any direction, like a serpent. She had just succeeded in curving it down into a graceful zigzag, and was going to begin.', 'Alice, as she went on, taking first one side and then the Mock Turtle replied in an offended tone. And the Gryphon added \'Come, let\'s hear some of YOUR adventures.\' \'I could tell you my adventures--beginning from this morning,\' said Alice a little timidly: \'but it\'s no use now,\' thought poor Alice, \'when one wasn\'t always growing larger and smaller, and being ordered about by mice and rabbits. I.', 2.00, NULL, NULL, 2605),
(16, 'Ryan Inc', 'https://i.pinimg.com/564x/03/20/b3/0320b3b9853a8db3348872cd7a735af4.jpg', 7, 1856, 'King replied. Here the other guinea-pig cheered, and was immediately suppressed by the officers of the court. \'What do you mean by that?\' said the Caterpillar contemptuously. \'Who are YOU?\' said the Caterpillar. \'Well, perhaps you haven\'t found it so yet,\' said Alice; \'but when you have to turn into a chrysalis--you will some day, you know--and then after that into a butterfly, I should think.', 'So Alice got up and ran off, thinking while she ran, as well she might, what a wonderful dream it had been. But her sister sat still just as she left her, leaning her head on her hand, watching the setting sun, and thinking of little Alice herself, and once again the tiny hands were clasped upon her knee, and the bright eager eyes were looking up into the sky. Alice went timidly up to the door.', 1.00, NULL, NULL, 368),
(17, 'Fisher, Gutkowski and Cronin', 'https://i.pinimg.com/236x/23/05/dc/2305dc00f1df4305df6a732efc623faf.jpg', 2, 875, 'Alice took up the fan and gloves. \'How queer it seems,\' Alice said to herself, as usual. \'Come, there\'s half my plan done now! How puzzling all these changes are! I\'m never sure what I\'m going to be, from one minute to another! However, I\'ve got back to the game, the Queen merely remarking that a moment\'s delay would cost them their lives. All the time they were playing the Queen never left off.', 'Gryphon hastily. \'Go on with the next verse,\' the Gryphon repeated impatiently: \'it begins \"I passed by his garden.\"\' Alice did not feel encouraged to ask any more questions about it, so she turned to the Mock Turtle, and to hear his history. I must go back and see after some executions I have ordered\'; and she walked off, leaving Alice alone with the Gryphon. Alice did not like the look of.', 5.00, NULL, NULL, 2003),
(18, 'Mohr-Schroeder', 'https://i.pinimg.com/236x/af/eb/12/afeb129de50721a3f2d2362154be5efd.jpg', 1, 2146, 'Alice, in a hurry to change the subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse did not notice this question, but hurriedly went on, \'\"--found it advisable to go with Edgar Atheling to meet William and offer him the crown. William\'s conduct at first was moderate. But the insolence of his Normans--\" How are you getting on?\' said the Cat, \'a dog\'s not mad. You grant that?\'.', 'ARE a simpleton.\' Alice did not quite know what to beautify is, I suppose?\' \'Yes,\' said Alice doubtfully: \'it means--to--make--anything--prettier.\' \'Well, then,\' the Gryphon went on, \'if you don\'t know what a Mock Turtle is.\' \'It\'s the thing Mock Turtle Soup is made from,\' said the Queen. \'I haven\'t opened it yet,\' said the White Rabbit, trotting slowly back again, and we won\'t talk about her.', 4.00, NULL, NULL, 296),
(19, 'Lindgren, Walker and O\'Keefe', 'https://i.pinimg.com/564x/4e/b4/f0/4eb4f040807db6f8764a0ca5210541e9.jpg', 3, 1699, 'However, she did not at all know whether it would like the name: however, it only grinned a little wider. \'Come, it\'s pleased so far,\' thought Alice, and she went round the court and got behind him, and very soon had to kneel down on the floor: in another minute there was not even room for this, and she tried her best to climb up one of the cakes, and was delighted to find that she knew the name.', 'Alice could bear: she got up in great disgust, and walked off; the Dormouse fell asleep instantly, and neither of the others took the least notice of her or of anything else. CHAPTER V. Advice from a Caterpillar The Caterpillar and Alice looked at each other for some time without hearing anything more: at last came a rumbling of little cartwheels, and the sound of a good many little girls in my.', 1.00, NULL, NULL, 1375),
(20, 'Smitham, Runolfsson and Ernser', 'qc.jpg', 4, 236, 'So she began nibbling at the righthand bit again, and did not venture to go near the house till she had brought herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two to think about stopping herself before she found herself falling down a very deep well. Either the well was very deep, or she fell very slowly, for she had plenty of time as she went down to look about her.', 'I should have croqueted the Queen\'s hedgehog just now, only it ran away when it saw mine coming!\' \'How do you know the way out of this pool? I am very tired of sitting by her sister on the bank, with her head in the lap of her sister, who was gently brushing away some dead leaves that had fluttered down from the sky! Ugh, Serpent!\' \'But I\'m NOT a serpent, I tell you!\' said Alice. \'I\'m a--I\'m.', 5.00, NULL, '2020-10-15 03:59:52', 321),
(327, 'Giày Vans', 'programar.png', 1, 680000, '<p>haha</p>\r\n', '<p>hihi</p>\r\n', 5.00, '2020-10-21 11:47:55', '2020-10-21 11:47:55', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://i.pinimg.com/564x/19/38/07/19380719c26b70c2e5dc65cace96b4ca.jpg', NULL, NULL),
(2, 1, 'https://i.pinimg.com/564x/3e/1b/06/3e1b06fa2c28ffa7e2093160b3d4a2c5.jpg', NULL, NULL),
(3, 1, 'https://i.pinimg.com/564x/00/b5/1d/00b51d80022afdeb0c943862b532e6e5.jpg', NULL, NULL),
(4, 2, 'https://i.pinimg.com/564x/7c/38/d8/7c38d8a035243f88e476c3818b8e2fdd.jpg', NULL, NULL),
(5, 2, 'https://i.pinimg.com/564x/3e/1b/06/3e1b06fa2c28ffa7e2093160b3d4a2c5.jpg', NULL, NULL),
(6, 2, 'https://i.pinimg.com/236x/5b/60/5c/5b605c6643d043a5d7e3ae53322103ef.jpg', NULL, NULL),
(7, 2, 'https://i.pinimg.com/564x/23/a2/f8/23a2f867c413d9ceea85856a9b1d4dfd.jpg', NULL, '2020-10-16 08:58:59'),
(8, 3, 'https://i.pinimg.com/564x/e2/db/1d/e2db1d2c8fa7c4c6f078a9195c1c04ff.jpg', NULL, NULL),
(9, 3, 'https://i.pinimg.com/236x/bc/18/2a/bc182a6b8ce5c152639da316407abf60.jpg', NULL, NULL),
(10, 3, 'https://i.pinimg.com/236x/00/35/8c/00358cdae04633180b72a3c368d43f59.jpg', NULL, NULL),
(11, 4, 'https://i.pinimg.com/564x/b7/96/f2/b796f23e64f30a9ee72572102bb576a3.jpg', NULL, NULL),
(12, 4, 'https://i.pinimg.com/564x/0e/11/f7/0e11f77b9e22082496512fa4e42fd24a.jpg', NULL, NULL),
(13, 4, 'https://i.pinimg.com/236x/20/75/92/207592225fa029e21cd3a8d227817a27.jpg', NULL, NULL),
(14, 4, 'https://i.pinimg.com/236x/05/b0/6b/05b06b58084b280cbfd3b6014ec80ed7.jpg', NULL, NULL),
(15, 5, 'https://i.pinimg.com/564x/74/f1/e8/74f1e8dda66ac6fa1f396f52cec0b18a.jpg', NULL, NULL),
(16, 5, 'https://i.pinimg.com/564x/42/e7/2c/42e72cc0cb905c551e1c6380a57f1627.jpg', NULL, NULL),
(17, 5, 'https://i.pinimg.com/236x/d2/79/f8/d279f8a1d270bf79634a1493bbc5349f.jpg', NULL, NULL),
(18, 6, 'https://i.pinimg.com/236x/77/ef/af/77efafd458e7007eaaa4ea5f51f0cbe9.jpg', NULL, NULL),
(19, 6, 'https://i.pinimg.com/236x/ab/6f/e4/ab6fe43f80d38877d889a061bd07e3f9.jpg', NULL, NULL),
(20, 6, 'https://i.pinimg.com/236x/46/cb/cf/46cbcf8ccf64773ac56a6b13602fd3ee.jpg', NULL, NULL),
(21, 7, 'https://lorempixel.com/640/480/cats/?16016', NULL, NULL),
(22, 7, 'https://i.pinimg.com/564x/21/82/6b/21826b8dcbee8367e50f788857b8a64a.jpg', NULL, NULL),
(23, 7, 'https://i.pinimg.com/236x/e7/71/df/e771df99550c05301a781ac8c47d0d86.jpg', NULL, NULL),
(24, 7, 'https://i.pinimg.com/564x/2a/78/82/2a7882b9d12ff1894c7469c03da78298.jpg', NULL, NULL),
(25, 7, 'https://i.pinimg.com/236x/64/76/ea/6476ea39a1e752ff5c3468de9c18fcae.jpg', NULL, NULL),
(26, 8, 'https://i.pinimg.com/236x/42/c2/37/42c2370e1a064799f4d3cb525dcdb71e.jpg', NULL, NULL),
(27, 8, 'https://i.pinimg.com/236x/0b/82/82/0b828237a42557931af8d6824c6420dc.jpg', NULL, NULL),
(28, 8, 'https://i.pinimg.com/236x/67/81/25/678125a53b96c3c576505ead87ad39e2.jpg', NULL, NULL),
(29, 8, 'https://i.pinimg.com/236x/93/18/d7/9318d7da6109daa462bd31e8f6f0374d.jpg', NULL, NULL),
(30, 8, 'https://i.pinimg.com/236x/19/e0/b4/19e0b4c0d14954b725ce39d88e6d9b6d.jpg', NULL, NULL),
(408, 9, 'anh-gif-1-min.gif', '2020-10-15 05:48:54', '2020-10-15 05:48:54'),
(415, 19, 'programar.png', '2020-10-16 04:08:40', '2020-10-16 08:31:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Trần Thị Linh', 'programar.png', 'linhtt@gmail.com', NULL, 0, '$2y$10$aiPeg/QOQGKQgzL/NZ4VwejajNGUucyQdW2MhEJ7YE9r.GVczoBXO', NULL, '2020-10-20 01:38:25', '2020-10-22 02:15:37'),
(19, '12312312', 'anh-gif-1-min.gif', 'sdfsdf@sdfsdf.sdf', NULL, 0, '$2y$10$o1bzFpprSoXnOv3qDosSheFGS1nlz9KO6vj6ET6c5CGLhktHtLA7m', NULL, '2020-10-23 00:21:49', '2020-10-23 00:37:13'),
(20, 'Nguyễn Quang Chiến', 'qc.jpg', 'quangchienxt2001@gmail.com', NULL, 0, '$2y$10$KYSb1JWVoJn2FuEC0a2FDeSwuudVLQ05T3UV7gZPtWLUfPWbcREfO', NULL, '2020-10-23 00:45:45', '2020-10-23 00:45:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`cate_name`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`invoice_id`,`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
