CREATE DATABASE `task_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- task_app.tasks definition

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarea` text NOT NULL,
  `completado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewTable_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;