DROP TABLE IF EXISTS `devops_tools`;

CREATE TABLE `devops_tools` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `devops_tools` (name, worked) VALUES ('Multi-Cloud',0),('Kubernetes',1),('Hashicorp Vault',0),('Docker',1),('Velero',1),('Helm',1),('Istio',1),('Zabbix',1);
