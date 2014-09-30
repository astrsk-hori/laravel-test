<?php
class Tag extends Eloquent {

  protected $table = 'tags';
  protected $guarded = array('id');

  public function users()
  {
    return $this->has_many_and_belongs_to('User', 'user_tag_relations');
  }

}
