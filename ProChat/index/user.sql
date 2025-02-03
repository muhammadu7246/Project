-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 06:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `$table`
--

CREATE TABLE `$table` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `$table`
--

INSERT INTO `$table` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'salar', 'asset/qur.jpeg', 'hi', '2024-06-26 18:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `ahmadahmad`
--

CREATE TABLE `ahmadahmad` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahmadahmad`
--

INSERT INTO `ahmadahmad` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'ahmad', 'asset/user.png', 'hi', '2024-06-20 07:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `ahmadasd`
--

CREATE TABLE `ahmadasd` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ahmadsalar`
--

CREATE TABLE `ahmadsalar` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahmadsalar`
--

INSERT INTO `ahmadsalar` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(19, 'salar', 'asset/qur.jpeg', 'HI Ahmad', '2024-06-27 14:35:42'),
(20, 'ahmad', 'asset/user.png', 'Hello', '2024-06-27 14:35:53'),
(21, 'salar', 'asset/qur.jpeg', 'hi', '2024-07-02 22:17:29'),
(22, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:12:40'),
(23, 'salar', 'asset/user.png', 'hello', '2024-07-04 23:19:15'),
(24, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:53:01'),
(25, 'salar', 'asset/user.png', 'Usama', '2024-07-04 23:53:27'),
(26, 'salar', 'asset/user.png', 'Usama', '2024-07-04 23:54:57'),
(27, 'salar', 'asset/user.png', 'Ahmad', '2024-07-04 23:55:11'),
(28, 'salar', 'asset/user.png', 'hello', '2024-07-06 16:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `ahmadsufyan7246`
--

CREATE TABLE `ahmadsufyan7246` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ahmadusama`
--

CREATE TABLE `ahmadusama` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahmadusama`
--

INSERT INTO `ahmadusama` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'usama', 'asset/user.png', 'hi', '2024-08-05 15:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `ahmadusama1234`
--

CREATE TABLE `ahmadusama1234` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahmadusama1234`
--

INSERT INTO `ahmadusama1234` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'usama1234', 'asset/user.png', 'hi', '2024-06-20 07:46:20'),
(2, 'ahmad', 'asset/user.png', 'HI Usama', '2024-06-20 07:46:35'),
(3, 'usama1234', 'asset/user.png', 'oh HI ahamd', '2024-06-20 07:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `text_id` varchar(60) NOT NULL,
  `sender_id` varchar(60) NOT NULL,
  `receiver_id` varchar(60) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `text_id`, `sender_id`, `receiver_id`, `txt`) VALUES
(139, 'qnvzzvnd1f', 'cpoipxeyse', 'ukflyuzahv', 'Hey everyone'),
(140, '54f4fycn18', 'khteeuuyiz', 'sbzpcgactb', 'Usama'),
(141, 'hfqi06lw05', 'ypxcolibuf', 'sbzpcgactb', 'ahamd'),
(142, 'anpor1xylj', 'khteeuuyiz', 'ukflyuzahv', 'hi'),
(143, 'mell73o1dh', 'khteeuuyiz', 'jnqwsoloux', 'hi'),
(144, '8ntmplrp1m', 'khteeuuyiz', 'jnqwsoloux', 'hello'),
(145, 'ob9wgbvsbk', '', 'jnqwsoloux', 'hi'),
(146, '53e9u1j3fy', '', 'yxolmdklgm', 'hi'),
(147, 'l61u4mx245', '', 'yxolmdklgm', 'hi'),
(148, 'hylb264cif', '', 'yxolmdklgm', 'hi'),
(149, '0mmukit6tz', '', 'yxolmdklgm', 'dhsjdakjdalkdla'),
(150, 'rzk1wf8g61', '', 'ukflyuzahv', 'hi'),
(151, 'gac4ivbsdp', '', '', ''),
(152, 'hl5yiiqxqb', '', '', ''),
(153, 'e3ogqp28nv', '', '', ''),
(154, 'e7jk8djb4h', '', '', ''),
(155, 'tnupc50t75', '', '', ''),
(156, '4eyjfagqzj', '', '', ''),
(157, '9h6fzu7jwb', '', '', ''),
(158, 'ofq33051px', '', '', ''),
(159, 'epj52uzckh', '', '', ''),
(160, '82fw4g6nsy', '', '', ''),
(161, '641feytbhi', '', '', ''),
(162, 'okkyxpbwgi', '', '', ''),
(163, 'ccvs78fzc6', '', '', ''),
(164, 'xgg8m6dlwu', '', '', ''),
(165, '218ogvh2ss', '', '', ''),
(166, 'qohcfy913n', '', '', ''),
(167, '4k89bsggvr', '', '', ''),
(168, 'h8731rii08', '', '', ''),
(169, '2d6wyzd4as', '', '', ''),
(170, '5ae1x6hni2', '', '', ''),
(171, '4kvhsd1129', '', '', ''),
(172, 'wi6dj9w34x', '', '', ''),
(173, '6mvrgcyit8', '', '', ''),
(174, 'c54zgderzy', '', '', ''),
(175, '87bee7ogho', '', '', ''),
(176, 'u4z1h626pg', '', '', ''),
(177, 'y52s85pp18', '', '', ''),
(178, '0o6n56ndum', '', '', ''),
(179, 't4qx7ejo2q', '', '', ''),
(180, 'j3qzbc3lzn', '', '', ''),
(181, 'stqed7dxky', '', '', ''),
(182, 'ej8pn3tza0', '', '', ''),
(183, 'mim2tp3ple', '', '', ''),
(184, 'vx1mzne3cm', '', '', ''),
(185, 'phmuvp1w4w', '', '', ''),
(186, '7zr3gpgy9a', '', '', ''),
(187, '9lhtth8icl', '', '', ''),
(188, 'oombcb0pdv', '', '', ''),
(189, 'ltfvaukgcu', '', '', ''),
(190, 'w0tzlyd0n8', '', '', ''),
(191, 'hklvreg4g5', '', '', ''),
(192, 'z7ga29p2ez', '', '', ''),
(193, '1kd8ttgrib', '', '', ''),
(194, 'sh502id2he', '', '', ''),
(195, '2hrwclwwrh', '', '', ''),
(196, 'j871qpb820', '', '', ''),
(197, 'l15lv3u64i', '', '', ''),
(198, 'yt3fn0zxlt', '', '', ''),
(199, '0tlff43dht', '', '', ''),
(200, '742oxcodn1', '', '', ''),
(201, 'xe9i7abcwb', '', '', ''),
(202, '33rf26mqs3', '', '', ''),
(203, 'kcym7p8otd', '', '', ''),
(204, 'xg1at8jhla', '', '', ''),
(205, '69ijebqijj', '', '', ''),
(206, 'ownb9sgdrs', '', '', ''),
(207, '34q7o3wru0', '', '', ''),
(208, '9jntgc1f0w', '', '', ''),
(209, 'qchx1fgi0m', '', '', ''),
(210, 'kbo2omple1', '', '', ''),
(211, 'v6t0li83gr', '', '', ''),
(212, '12kyvdel26', '', '', ''),
(213, 'jz9iqro23n', '', '', ''),
(214, 'ddwmm5sgtf', '', '', ''),
(215, '5hu3k4hmsy', '', '', ''),
(216, 'wp6dmdhc61', '', '', ''),
(217, 'ij8ydrruvf', '', '', ''),
(218, 'guxcy74xlf', '', '', ''),
(219, 'a8rv6gbowg', '', '', ''),
(220, 'd6rhutv6gw', '', '', ''),
(221, 'sqcoikumm7', '', '', ''),
(222, 'rugxu8uesm', '', '', ''),
(223, '1biuh7pwg9', '', '', ''),
(224, 'nou61qg3ky', '', '', ''),
(225, 'ijytpxoa7j', '', '', ''),
(226, 'r81kkl80lh', '', '', ''),
(227, '8qocpfa1rs', '', '', ''),
(228, 'bxl9urgiue', '', '', ''),
(229, '12tsrx0ean', '', '', ''),
(230, 'fc37iknocg', '', '', ''),
(231, 'apbpv7e86h', '', '', ''),
(232, 'r7ab0kv2n7', '', '', ''),
(233, 'tt06mv5tk1', '', '', ''),
(234, 'lharecrdya', '', '', ''),
(235, '55oan5lw7v', '', '', ''),
(236, 'uir6j60rdh', '', '', ''),
(237, '7wfm0g0thq', '', '', ''),
(238, 'dfxruiz49h', '', '', ''),
(239, 'ho7p82luo2', '', '', ''),
(240, 'z2m33imfuq', '', '', ''),
(241, '15rbbsbx2l', '', '', ''),
(242, 'k3b72obm5v', '', '', ''),
(243, '00m99cjrsb', '', '', ''),
(244, '4x834ht7u5', '', '', ''),
(245, 'hl0xurlh1f', '', '', ''),
(246, 'agh16qxxiq', '', '', ''),
(247, 'x1zvpastj6', '', '', ''),
(248, '8sc62yabon', '', '', ''),
(249, 'hoxphlozap', '', '', ''),
(250, 'fq8k6vzg1t', '', '', ''),
(251, 'fbgse1ztn9', '', '', ''),
(252, 'a3cdr1uj1a', '', '', ''),
(253, '4wem0tr3lk', '', '', ''),
(254, '51l7wcgyf2', '', '', ''),
(255, 'touuyui8rf', '', '', ''),
(256, 'wke1ciqoek', '', '', ''),
(257, 'gt050xt58n', '', '', ''),
(258, 'fufnuudxvp', '', '', ''),
(259, 'eb065qskrw', '', '', ''),
(260, 'zeno5o2ebb', '', '', ''),
(261, 'ntijkwvezi', '', '', ''),
(262, '7wjzwaxvuw', '', '', ''),
(263, 'pix2q7a6wf', '', '', ''),
(264, 'c22n5pv734', '', '', ''),
(265, 'aj5ch8ifql', '', '', ''),
(266, 'y2wcfqklki', '', '', ''),
(267, '3w48s1a1xy', '', '', ''),
(268, '78zec0cjrd', '', '', ''),
(269, '9jht7ku9sr', '', '', ''),
(270, 'dqigtvwj1s', '', '', ''),
(271, 'aekujkw6qk', '', '', ''),
(272, 'a772t1uuiw', '', '', ''),
(273, '1c97b3y1zg', '', '', ''),
(274, 'o9w8x3ajbr', '', '', ''),
(275, '5x1we3onle', '', '', ''),
(276, 'htd107rxej', '', '', ''),
(277, '1tykzn8va8', '', '', ''),
(278, '0vamzjrysq', '', '', ''),
(279, '3vcl0fqhjz', '', '', ''),
(280, 'cpa4snyad1', '', '', ''),
(281, 'we2i71xpsy', '', '', ''),
(282, 'fnmt9j5b2x', '', '', ''),
(283, '7qqj0s0ni8', '', '', ''),
(284, 'kuayqc2z4o', '', '', ''),
(285, '938600wfnf', '', '', ''),
(286, 'l71sf3263h', '', '', ''),
(287, 'mls2ahhy48', '', '', ''),
(288, 'zwiwstx2n3', '', '', ''),
(289, 'a9lm0lm0pf', '', '', ''),
(290, 'jefapmt4vd', '', '', ''),
(291, '5det9ofp9o', '', '', ''),
(292, 'arpctr0gp5', '', '', ''),
(293, 'u86z0pxd3l', '', '', ''),
(294, 'fjiqv9195s', '', '', ''),
(295, 'x91szpigh5', '', '', ''),
(296, 'maeulcihnb', '', '', ''),
(297, 'dsv0l5yw0f', '', '', ''),
(298, 'cwdzfx0k40', '', '', ''),
(299, '4j3nd9p5up', '', '', ''),
(300, 'xkur1i1uqq', '', '', ''),
(301, 'acda64tay5', '', '', ''),
(302, '1qsvbydrio', '', '', ''),
(303, 'nsx2vkelde', '', '', ''),
(304, 'lgszpbe9qd', '', '', ''),
(305, 'gzcydn5vbc', '', '', ''),
(306, 'c9995lr7f6', '', '', ''),
(307, '05e35wukck', '', '', ''),
(308, 'emwcqj28aq', '', '', ''),
(309, 'qa1u8o59bs', '', '', ''),
(310, '395hbpf4lv', '', '', ''),
(311, '0l1gywic4l', '', '', ''),
(312, 'ji15rnryap', '', '', ''),
(313, '808965i9pw', '', '', ''),
(314, '9hbjn9jqwg', '', '', ''),
(315, 'vvvsfo2vcz', '', '', ''),
(316, 'zuh6w9fhnm', '', '', ''),
(317, '3e5cktzkid', '', '', ''),
(318, 'ls8ac3kzke', '', '', ''),
(319, '4y9of87119', '', '', ''),
(320, 'wyrmlcjumg', '', '', ''),
(321, 'rsclculk0e', '', '', ''),
(322, 'oyl40iaf9n', '', '', ''),
(323, '5innntek5i', '', '', ''),
(324, 'qdwhvyk76h', '', '', ''),
(325, 'tzkpi8y60r', '', '', ''),
(326, 'lkb9ry87mh', '', '', ''),
(327, 'cycblbh9e4', '', '', ''),
(328, 'yfg99uem41', '', '', ''),
(329, 'y7736l9v01', '', '', ''),
(330, 'jc5bd1b7ms', '', '', ''),
(331, '77ljrulj65', '', '', ''),
(332, 'vervhuhxsc', '', '', ''),
(333, 'z2pvmuckey', '', '', ''),
(334, '7ct4ocvde1', '', '', ''),
(335, 'gwppmztgtd', '', '', ''),
(336, 'bifgt0xi6y', '', '', ''),
(337, 'zirflxkd72', '', '', ''),
(338, 'ex0jo9tbyk', '', '', ''),
(339, 'on2pkkk0fb', '', '', ''),
(340, 'hi1bjdckkt', '', '', ''),
(341, 'uuf95uth9p', '', '', ''),
(342, '8q7idikkzh', '', '', ''),
(343, 'vcfqv7rfxh', '', '', ''),
(344, '5d08tr3mje', '', '', ''),
(345, 'onvtqf7zic', '', '', ''),
(346, 'b0v2067jdw', '', '', ''),
(347, 'iwrqrt41fm', '', '', ''),
(348, '49lo0vwgsg', '', '', ''),
(349, 'tlyl9wszzx', '', '', ''),
(350, 'nrw7oeo2l5', '', '', ''),
(351, '4oh6m4s9ab', '', '', ''),
(352, '0ru3niq6z8', '', '', ''),
(353, '7b0lul0fbh', '', '', ''),
(354, '79nfplguyq', '', '', ''),
(355, 'jneyma51h5', '', '', ''),
(356, 'uj7aj073je', '', '', ''),
(357, '7ui5auhhmu', '', '', ''),
(358, 'brwewi4cnt', '', '', ''),
(359, '0x9x133o8n', '', '', ''),
(360, 'lu4uyepdu7', '', '', ''),
(361, 'lgv5fn28rv', '', '', ''),
(362, 'j2wz09i890', '', '', ''),
(363, 'ohfg5x00wt', '', '', ''),
(364, '1a0j3cxuho', '', '', ''),
(365, 'i56ajd008b', '', '', ''),
(366, 'kzimshm3ng', '', '', ''),
(367, '8yuxvp65rm', '', '', ''),
(368, 'zbvuquy63s', '', '', ''),
(369, 'kark07ch46', '', '', ''),
(370, 'jsgdvhe289', '', '', ''),
(371, 'v6vqe64hq7', '', '', ''),
(372, '620e1lv8w2', '', '', ''),
(373, 'shdzh70uyx', '', '', ''),
(374, 'tabq2wng3p', '', '', ''),
(375, 'rllj2isw28', '', '', ''),
(376, 'mwwlso6k8g', '', '', ''),
(377, '0it1c8k6xb', '', '', ''),
(378, 'optzvtd2b5', '', '', ''),
(379, 'r9v4xsmugq', '', '', ''),
(380, 'hgocsz4p0u', '', '', ''),
(381, 'tizy74cotq', '', '', ''),
(382, 's1qy92jn0v', '', '', ''),
(383, 'whk8a1xus0', '', '', ''),
(384, 'zowjj3rrzv', '', '', ''),
(385, 'vpwnrgb2l1', '', '', ''),
(386, 'ityvxv8raj', '', '', ''),
(387, 'la26dwedhs', '', '', ''),
(388, 'yewhjmeqns', '', '', ''),
(389, '9jtsrwf5g4', '', '', ''),
(390, 's40cbo14kv', '', '', ''),
(391, '0fv4636bde', '', '', ''),
(392, 'zq1o189c96', '', '', ''),
(393, '15oj8klokv', '', '', ''),
(394, 'xl5riynfv0', '', '', ''),
(395, '4wftwdlect', '', '', ''),
(396, 'fgcufp8qt7', '', '', ''),
(397, 'muyl0ilrqz', '', '', ''),
(398, 'h12v4ful2f', '', '', ''),
(399, 'dhltkw9ijs', '', '', ''),
(400, 'ikyeqmuwo4', '', '', ''),
(401, '8thgismnzh', '', '', ''),
(402, 'uje9bj4vis', '', '', ''),
(403, '7l8d432nx1', '', '', ''),
(404, 'gbls3vtntj', '', '', ''),
(405, 'zl43yis6pc', '', '', ''),
(406, '87stzom7di', '', '', ''),
(407, 'csnrn44x78', '', '', ''),
(408, 'saoflantbn', '', '', ''),
(409, 'u3uwjcguz1', '', '', ''),
(410, 'nh2xgtebg3', '', '', ''),
(411, '1o3vx5qagz', '', '', ''),
(412, 'aa2w0y1pr2', '', '', ''),
(413, 'eurjjihs5g', '', '', ''),
(414, 'u2b20pihvx', '', '', ''),
(415, 'v79od1wsi3', '', '', ''),
(416, 'iqlz4rlssw', '', '', ''),
(417, '95cw1lu265', '', '', ''),
(418, '40nsxpnazl', '', '', ''),
(419, '07yth4tyg6', '', '', ''),
(420, 'rq14o6xtkp', '', '', ''),
(421, '5j7aayrckr', '', '', ''),
(422, 'q0k36j114g', '', '', ''),
(423, '627lwigaur', '', '', ''),
(424, 'zzplakfcfi', '', '', ''),
(425, 'lt22csvn8l', '', '', ''),
(426, '1lf8fss34w', '', '', ''),
(427, '041j8if1js', '', '', ''),
(428, 'k7j7cqik79', '', '', ''),
(429, 'p8p4npr37k', '', '', ''),
(430, 'wfmxg4vtta', '', '', ''),
(431, 'vv97tabihr', '', '', ''),
(432, 'a3hp5v9h7q', '', '', ''),
(433, 'k9wxhz75pc', '', '', ''),
(434, '8q64kic8iu', '', '', ''),
(435, 'x3cinc3hao', '', '', ''),
(436, '4g8a8grmf4', '', '', ''),
(437, 'ne1uz4py8j', '', '', ''),
(438, '08qmhas4of', '', '', ''),
(439, '3oijp23hyp', '', '', ''),
(440, 'eyyzujkj4c', '', '', ''),
(441, 'irr460vrm5', '', '', ''),
(442, 'crenckz6pu', '', '', ''),
(443, 'rgdyxus3qx', '', '', ''),
(444, 'za8v4dzxju', '', '', ''),
(445, 'n5yxmu0p9s', '', '', ''),
(446, 'jgpkbxpg5t', '', '', ''),
(447, 'b11x48pfxr', '', '', ''),
(448, '5pnnokiobk', '', '', ''),
(449, 'fzsfcinaal', '', '', ''),
(450, 'y9d3sw2kv9', '', '', ''),
(451, 'cdkt7jrny1', '', '', ''),
(452, 'hnkizz52fr', '', '', ''),
(453, '61fq877hl2', '', '', ''),
(454, '5x2ply66hm', '', '', ''),
(455, 'bdkgyttskj', '', '', ''),
(456, 'ok3fblb3ej', '', '', ''),
(457, '8mvv80ojfh', '', '', ''),
(458, 'ngfwzqlrk9', '', '', ''),
(459, 'wis5c7p97a', '', '', ''),
(460, 'lpptuf93dv', '', '', ''),
(461, '30x1ndssdb', '', '', ''),
(462, 'va6cjmgoe3', '', '', ''),
(463, '9c03gitbzo', '', '', ''),
(464, 'yitjgr2ic0', '', '', ''),
(465, 'y34bdkvryf', '', '', ''),
(466, 'o2lyz1wmh8', '', '', ''),
(467, 'chrre5m6bi', '', '', ''),
(468, 'u203sfidkg', '', '', ''),
(469, '4mjne6mfdi', '', '', ''),
(470, 'oh653usmcn', '', '', ''),
(471, 'gj458eit8d', '', '', ''),
(472, 'b3dk9y1vtx', '', '', ''),
(473, 'ohfu1o02sq', '', '', ''),
(474, '082gv7suu8', '', '', ''),
(475, 'j9px8aqnbk', '', '', ''),
(476, 'wlsrwb21k0', '', '', ''),
(477, 'm8gzaml3yb', '', '', ''),
(478, 'w3emsf55j5', '', '', ''),
(479, 'xdkbothrr7', '', '', ''),
(480, 'qgg01imf3v', '', '', ''),
(481, '4hg0yl46ys', '', '', ''),
(482, 'c2dx1qwfyx', '', '', ''),
(483, '1k2tnsrrgj', '', '', ''),
(484, 'rgz41exh70', '', '', ''),
(485, 'yg720xs2da', '', '', ''),
(486, '3r00thzpey', '', '', ''),
(487, '52u8in7kbq', '', '', ''),
(488, 'j2fhf0hokb', '', '', ''),
(489, '80babuh0op', '', '', ''),
(490, 'vrjb3g028p', '', '', ''),
(491, '2n4kb7xjob', '', '', ''),
(492, 'hosrmhbsvn', '', '', ''),
(493, 'th032dzc85', '', '', ''),
(494, 'nb5oyx4lxi', '', '', ''),
(495, '5riolcndmi', '', '', ''),
(496, 'av3gcri7x0', '', '', ''),
(497, 'km81xoulm2', '', '', ''),
(498, '26hih3bq6n', '', '', ''),
(499, 'dagoi4xikg', '', '', ''),
(500, '1ul2kkm3ez', '', '', ''),
(501, 'wn3jsf7xas', '', '', ''),
(502, '00syvt7uw2', '', '', ''),
(503, 'qysxlh17a7', '', '', ''),
(504, 'n8zi4kz6tr', '', '', ''),
(505, 'mclqwdd2zn', '', '', ''),
(506, '3mzeymuimg', '', '', ''),
(507, 'hmjwqe4spf', '', '', ''),
(508, 'k4zopw1heg', '', '', ''),
(509, 'kiqu8lwkpr', '', '', ''),
(510, 'bewvvg5uy5', '', '', ''),
(511, '9zshj72ecr', '', '', ''),
(512, '1rurrhnuy5', '', '', ''),
(513, 'f5yx361ycs', '', '', ''),
(514, '8b5uevwlwz', '', '', ''),
(515, '27dsk0n0vo', '', '', ''),
(516, 'sq0mmiizfm', '', '', ''),
(517, 'wcntvwhnq6', '', '', ''),
(518, '2jtqte9rl5', '', '', ''),
(519, 'mp6uxe7qyp', '', '', ''),
(520, '400f7xwbcg', '', '', ''),
(521, 'eok7m242tk', '', '', ''),
(522, 'jhuv136jyb', '', '', ''),
(523, 'g84syzp79g', '', '', ''),
(524, 's7cb54cefx', '', '', ''),
(525, 'kl0e9ih3co', '', '', ''),
(526, 'metn16py18', '', '', ''),
(527, '6tp7tt79ez', '', '', ''),
(528, 'kmf1of6b1k', '', '', ''),
(529, '5ehq265sm2', '', '', ''),
(530, 'p5i0wv9nwt', '', '', ''),
(531, 'hq1z5eo29y', '', '', ''),
(532, '4am4thup3w', '', '', ''),
(533, 'tq06fmcs94', '', '', ''),
(534, 'fojpkrakq8', '', '', ''),
(535, '756lv8ic65', '', '', ''),
(536, '6zuu03uyko', '', '', ''),
(537, '3gjcr0huuu', '', '', ''),
(538, 'zfq51oblcm', '', '', ''),
(539, 'juf4s0d1dr', '', '', ''),
(540, 'mrcpir2dnb', '', '', ''),
(541, 'vld5qtl4p1', '', '', ''),
(542, '9cikt39ub4', '', '', ''),
(543, 'j9w676ocyd', '', '', ''),
(544, 'i1l82a49ut', '', '', ''),
(545, 'fvto0wv5hs', '', '', ''),
(546, 'zhfh5zkk7b', '', '', ''),
(547, 'g8ljqblub9', '', '', ''),
(548, '9kbf9zk2dj', '', '', ''),
(549, '94rcfrd9vu', '', '', ''),
(550, 'e6z7chwohz', '', '', ''),
(551, 'v346cwastw', '', '', ''),
(552, 'jz93k91mib', '', '', ''),
(553, 'jh5miupcc7', '', '', ''),
(554, 'vovpbk0681', '', '', ''),
(555, 'umkkldnh43', '', '', ''),
(556, 'ucd0gjmsjz', '', '', ''),
(557, 'iwkf1se0cv', '', '', ''),
(558, 'j17ngp7t79', '', '', ''),
(559, '49kv994zt7', '', '', ''),
(560, '0ifr7aooya', '', '', ''),
(561, 'gi3z356al1', '', '', ''),
(562, '72onav4phz', '', '', ''),
(563, '6gy67y6d5i', '', '', ''),
(564, 'mjm30uid4t', '', '', ''),
(565, '503k509odw', '', '', ''),
(566, '3wefdzifzx', '', '', ''),
(567, 'fe1pw6jqln', '', '', ''),
(568, 'xhh2vc30j0', '', '', ''),
(569, '650r3s4lvw', '', '', ''),
(570, 'ufxkrpkyxv', '', '', ''),
(571, 'gle8hwsdtt', '', '', ''),
(572, '6ubjn5qm3z', '', '', ''),
(573, 'jcj8xwletl', '', '', ''),
(574, 'ka941ze7og', '', '', ''),
(575, '953wsj3mcc', '', '', ''),
(576, 'awecyo45d6', '', '', ''),
(577, 'a4cw956rer', '', '', ''),
(578, 'g32l11oetx', '', '', ''),
(579, 'fy85ripuhj', '', '', ''),
(580, 'ynhxi4i4nj', '', '', ''),
(581, 'ki8ghlasvc', '', '', ''),
(582, 'iacigo3cy9', '', '', ''),
(583, 'ogiwmpftse', '', '', ''),
(584, '5vanmk1enw', '', '', ''),
(585, 's5mms58dh1', '', '', ''),
(586, 'pt5s4nh6py', '', '', ''),
(587, 'v93y3o93st', '', '', ''),
(588, 'ahwxnhzyph', '', '', ''),
(589, 'ewjpo1qj7s', '', '', ''),
(590, 'ijcdl0rn7i', '', '', ''),
(591, '1p7quknn1n', '', '', ''),
(592, '2fqi0v5lwb', '', '', ''),
(593, 'wj30zxrahz', '', '', ''),
(594, 'n6gycusu5c', '', '', ''),
(595, 'qe7fbyt1u2', '', '', ''),
(596, 'ibz79lvkmv', '', '', ''),
(597, 't8i1feioch', 'ypxcolibuf', 'ukflyuzahv', 'djsoijcs'),
(598, '2kq6vsekv6', 'ypxcolibuf', 'sbzpcgactb', 'usama'),
(599, 's95zenipdf', 'ypxcolibuf', 'sbzpcgactb', 'sadads'),
(600, 'fwd01lsj3u', 'ypxcolibuf', '<br />\n<b>Warning</b>:  Undefined variable $group_id in <b>C', 'asa'),
(601, 'dg13sur0b4', 'ypxcolibuf', '<br />\n<b>Warning</b>:  Undefined variable $group_id in <b>C', 'hi'),
(602, '0fhne4thrc', 'ypxcolibuf', 'jnqwsoloux', 'hi'),
(603, 'd29tvgpbdx', 'ypxcolibuf', 'jnqwsoloux', 'sadads'),
(604, 'nyqki3w2u4', 'ypxcolibuf', 'jnqwsoloux', '1'),
(605, 'z5rtkiascu', 'ypxcolibuf', '<br />\n<b>Warning</b>:  Undefined variable $group_id in <b>C', 'aasSA'),
(606, 'pyadfmvk5r', 'ypxcolibuf', 'jnqwsoloux', 'ssaSA'),
(607, 'vxnu91w7n8', 'ypxcolibuf', 'yxolmdklgm', 'ASDA'),
(608, 'o2bfq876eb', 'ypxcolibuf', 'yxolmdklgm', 'WQQEE'),
(609, 'frp9ri26ga', 'ypxcolibuf', 'yxolmdklgm', 'WQQEE'),
(610, 'nji4xiyp8w', 'ypxcolibuf', 'yxolmdklgm', 'uSAMA'),
(611, '85iu5rm0m4', 'ypxcolibuf', 'jnqwsoloux', 'Assa'),
(612, 'f05y86ueoc', 'ypxcolibuf', 'ukflyuzahv', 'Assa'),
(613, 'uwqx7iqpvy', 'ypxcolibuf', 'ukflyuzahv', 'WQQEE'),
(614, 'g7khg5vz6y', 'ypxcolibuf', 'jnqwsoloux', 'WQQEE'),
(615, 'sy3tc7cmn4', 'ypxcolibuf', 'jnqwsoloux', 'Assa'),
(616, 'efj5ccgns8', 'ypxcolibuf', 'jnqwsoloux', 'WQQEE'),
(617, 'tqpmo7sm3k', 'ypxcolibuf', 'jnqwsoloux', 'Assa'),
(618, 'c0idvp0v67', 'ypxcolibuf', 'jnqwsoloux', 'sdasass'),
(619, 'd95a6lpok8', '', 'ukflyuzahv', 'Assa'),
(620, '38ts80eifw', '', 'ukflyuzahv', 'hellousama');

-- --------------------------------------------------------

--
-- Table structure for table `dp`
--

CREATE TABLE `dp` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `size` varchar(128) NOT NULL,
  `folder` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dp`
--

INSERT INTO `dp` (`sn`, `username`, `name`, `size`, `folder`, `date`) VALUES
(23, 'salar', 'qur.jpeg', '4548', 'asset/qur.jpeg', '2024-06-23 00:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_id` varchar(60) NOT NULL,
  `group_name` varchar(120) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_id`, `group_name`, `created_by`, `created_on`) VALUES
(20, 'ukflyuzahv', 'Dark Night', 'cpoipxeyse', '2023-12-28 21:40:41'),
(21, 'jnqwsoloux', 'The great canal', 'cpoipxeyse', '2023-12-28 21:42:06'),
(22, 'sbzpcgactb', 'Usamama', 'ypxcolibuf', '2024-08-01 15:33:04'),
(25, 'bvcwaciejs', 'salar', 'waduhxgvuk', '2024-08-06 19:00:58'),
(35, 'ayqxjorpwt', 'web developer', 'idklumtzmw', '2024-08-06 19:51:01'),
(38, 'sofldjizho', 'freelancer', 'idklumtzmw', '2024-08-06 20:03:41'),
(39, 'mruwnbmutm', 'web developer mode', 'idklumtzmw', '2024-08-06 20:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sn`, `username`, `email`, `mobile`, `pass`, `date`) VALUES
(63, 'Ahmad', 'Ahmad@gmail.com', '', '33P@ssword33', '2024-06-20 07:39:12'),
(64, 'sufyan7246', 'sufyan@gmail.com', '', 'Usama7246@', '2024-06-20 07:49:29'),
(65, 'Salar', 'salar@gmail.com', '', '33P@ssword33', '2024-06-23 00:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `fn` varchar(128) NOT NULL,
  `ln` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `dob` date NOT NULL,
  `work` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `bio` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salarasd`
--

CREATE TABLE `salarasd` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salarsalar`
--

CREATE TABLE `salarsalar` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarsalar`
--

INSERT INTO `salarsalar` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `salarusama`
--

CREATE TABLE `salarusama` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarusama`
--

INSERT INTO `salarusama` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'usama', 'asset/user.png', 'hi', '2024-08-05 15:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `sufyan7246asd`
--

CREATE TABLE `sufyan7246asd` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sufyan7246ibh`
--

CREATE TABLE `sufyan7246ibh` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sufyan7246salar`
--

CREATE TABLE `sufyan7246salar` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sufyan7246salar`
--

INSERT INTO `sufyan7246salar` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:10:34'),
(2, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:52:30'),
(3, 'salar', 'asset/user.png', 'hi', '2024-07-04 23:52:33'),
(4, 'salar', 'asset/user.png', 'Usaama', '2024-07-04 23:57:39'),
(5, 'salar', 'asset/user.png', 'hi', '2024-07-05 00:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `sufyan7246usama`
--

CREATE TABLE `sufyan7246usama` (
  `sn` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `dp` varchar(128) NOT NULL,
  `msg` varchar(128) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sufyan7246usama`
--

INSERT INTO `sufyan7246usama` (`sn`, `username`, `dp`, `msg`, `date`) VALUES
(1, 'usama', 'asset/user.png', 'hi', '2024-08-05 15:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `topic_id` varchar(60) NOT NULL,
  `topic_name` varchar(120) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic_id`, `topic_name`, `created_by`, `created_on`) VALUES
(10, 'rluvkpgqsu', 'How to get top of Mount Everest (Guide)', 'cpoipxeyse', '2023-12-28 21:41:29'),
(11, 'nndmiseclr', 'Ultimate guide for making pizzzza!', 'cpoipxeyse', '2023-12-28 21:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_code` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_code`, `username`, `password`, `avatar`, `created_on`) VALUES
(26, 'yxusfcuttn', 'nitinsingh', 'b585c4415b1fe50f2c31fa1698b271b7', 'avatar-1', '2022-05-30 06:48:53'),
(27, 'ublzbcfveu', 'nitinsxngh', '202cb962ac59075b964b07152d234b70', 'avatar-7', '2023-12-25 15:14:03'),
(28, 'oinizotjit', 'xxx', '202cb962ac59075b964b07152d234b70', 'avatar-2', '2023-12-28 20:56:57'),
(29, 'cpoipxeyse', 'admin', 'e6e061838856bf47e1de730719fb2609', 'avatar-4', '2023-12-28 21:30:35'),
(30, 'ypxcolibuf', 'Usama', 'd3184ba4391ef4b4a3b2ac9f0b544386', 'avatar-2', '2024-08-01 15:32:45'),
(31, 'khteeuuyiz', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'avatar-3', '2024-08-01 15:34:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `$table`
--
ALTER TABLE `$table`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadahmad`
--
ALTER TABLE `ahmadahmad`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadasd`
--
ALTER TABLE `ahmadasd`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadsalar`
--
ALTER TABLE `ahmadsalar`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadsufyan7246`
--
ALTER TABLE `ahmadsufyan7246`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadusama`
--
ALTER TABLE `ahmadusama`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `ahmadusama1234`
--
ALTER TABLE `ahmadusama1234`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dp`
--
ALTER TABLE `dp`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `salarasd`
--
ALTER TABLE `salarasd`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `salarsalar`
--
ALTER TABLE `salarsalar`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `salarusama`
--
ALTER TABLE `salarusama`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sufyan7246asd`
--
ALTER TABLE `sufyan7246asd`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sufyan7246ibh`
--
ALTER TABLE `sufyan7246ibh`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sufyan7246salar`
--
ALTER TABLE `sufyan7246salar`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sufyan7246usama`
--
ALTER TABLE `sufyan7246usama`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `$table`
--
ALTER TABLE `$table`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ahmadahmad`
--
ALTER TABLE `ahmadahmad`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ahmadasd`
--
ALTER TABLE `ahmadasd`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ahmadsalar`
--
ALTER TABLE `ahmadsalar`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ahmadsufyan7246`
--
ALTER TABLE `ahmadsufyan7246`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ahmadusama`
--
ALTER TABLE `ahmadusama`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ahmadusama1234`
--
ALTER TABLE `ahmadusama1234`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=621;

--
-- AUTO_INCREMENT for table `dp`
--
ALTER TABLE `dp`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `salarasd`
--
ALTER TABLE `salarasd`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salarsalar`
--
ALTER TABLE `salarsalar`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salarusama`
--
ALTER TABLE `salarusama`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sufyan7246asd`
--
ALTER TABLE `sufyan7246asd`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sufyan7246ibh`
--
ALTER TABLE `sufyan7246ibh`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sufyan7246salar`
--
ALTER TABLE `sufyan7246salar`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sufyan7246usama`
--
ALTER TABLE `sufyan7246usama`
  MODIFY `sn` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
