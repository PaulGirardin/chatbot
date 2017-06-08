<?php



/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $question;

    /**
     * @var integer
     */
    private $questionOrigine;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Question
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set questionOrigine
     *
     * @param integer $questionOrigine
     *
     * @return Question
     */
    public function setQuestionOrigine($questionOrigine)
    {
        $this->questionOrigine = $questionOrigine;

        return $this;
    }

    /**
     * Get questionOrigine
     *
     * @return integer
     */
    public function getQuestionOrigine()
    {
        return $this->questionOrigine;
    }
}

