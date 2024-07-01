<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        $hashSet = new HashSet();
        for ($i = 0; $i < count($nums); $i++) {
            if ($hashSet->contains($nums[$i])) {
                return true;
            }
            $hashSet->add($nums[$i]);
        }
        return false;
    }
}
class HashSet
{
    private $set = [];
    public function add($value)
    {
        $this->set[$value] = true;
    }
    public function remove($value)
    {
        unset($this->set[$value]);
    }
    public function contains($value)
    {
        return isset($this->set[$value]);
    }
    public function size()
    {
        return count($this->set);
    }
    public function toArray()
    {
        return array_keys($this->set);
    }
}
