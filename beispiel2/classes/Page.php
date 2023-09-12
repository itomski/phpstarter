<?php

class Page {

    protected $id;
    protected $label;
    protected $headline;
    protected $content;
    protected $online;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     */
    public function setLabel($label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of headline
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set the value of headline
     */
    public function setHeadline($headline): self
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of online
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set the value of online
     */
    public function setOnline($online): self
    {
        $this->online = $online;

        return $this;
    }
}