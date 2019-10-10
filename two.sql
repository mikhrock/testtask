/* Task 2 */

/* a */
SELECT `id`, COUNT(*) 
      FROM `texts` 
      GROUP BY `id` 
      HAVING COUNT(*) > 1;

/* b */
SELECT c.`title` 
      FROM `category` as c 
        JOIN `category` as sc 
        ON c.`id` = sc.`parent_id` 
      GROUP BY c.`title` 
      HAVING COUNT(sc.`id`) <= 3;

/* c */
SELECT c.`title`
      FROM `category` as c
        JOIN `category` as sc
        ON c.`id` = sc.`parent_id`
      WHERE c.`id` NOT IN
        (SELECT c.`id`
          FROM `category` as c 
            JOIN `texts` as t 
            ON c.`texts_id` = t.`id`)
      GROUP BY c.`title`;

/* d */
/* Create indexes */