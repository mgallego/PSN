select *
  from images
 where image_id not in (select image_id
                          from voted_images
			 where user_id = :usuario)
  order by rand()
  limit 1;

