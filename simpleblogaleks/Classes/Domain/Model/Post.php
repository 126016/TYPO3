<?php
namespace Ion2s\Simpleblogaleks\Domain\Model;


/***
 *
 * This file is part of the "Simple Blog Extension Aleksandra" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Aleksandra Fey <aleksandra.fey@ion2s.com>, ion2s.com
 *
 ***/
/**
 * Posts
 */
class Post extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * content
     * 
     * @var string
     */
    protected $content = '';

    /**
     * postdate
     * 
     * @var \DateTime
     */
    protected $postdate = null;

    /**
     * Post comments
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Comment>
     * @cascade remove
     * @lazy
     */
    protected $comments = null;

    /**
     * Post author
     * 
     * @var \Ion2s\Simpleblogaleks\Domain\Model\Author
     */
    protected $author = null;

    /**
     * Post tags
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Tag>
     */
    protected $tags = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the content
     * 
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     * 
     * @param string $content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Returns the postdate
     * 
     * @return \DateTime $postdate
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Sets the postdate
     * 
     * @param \DateTime $postdate
     * @return void
     */
    public function setPostdate(\DateTime $postdate)
    {
        $this->postdate = $postdate;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->comments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Comment
     * 
     * @param \Ion2s\Simpleblogaleks\Domain\Model\Comment $comment
     * @return void
     */
    public function addComment(\Ion2s\Simpleblogaleks\Domain\Model\Comment $comment)
    {
        $this->comments->attach($comment);
    }

    /**
     * Removes a Comment
     * 
     * @param \Ion2s\Simpleblogaleks\Domain\Model\Comment $commentToRemove The Comment to be removed
     * @return void
     */
    public function removeComment(\Ion2s\Simpleblogaleks\Domain\Model\Comment $commentToRemove)
    {
        $this->comments->detach($commentToRemove);
    }

    /**
     * Returns the comments
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Comment> $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Comment> $comments
     * @return void
     */
    public function setComments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments)
    {
        $this->comments = $comments;
    }

    /**
     * Returns the author
     * 
     * @return \Ion2s\Simpleblogaleks\Domain\Model\Author $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     * 
     * @param \Ion2s\Simpleblogaleks\Domain\Model\Author $author
     * @return void
     */
    public function setAuthor(\Ion2s\Simpleblogaleks\Domain\Model\Author $author)
    {
        $this->author = $author;
    }

    /**
     * Adds a Tag
     * 
     * @param \Ion2s\Simpleblogaleks\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Ion2s\Simpleblogaleks\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     * 
     * @param \Ion2s\Simpleblogaleks\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Ion2s\Simpleblogaleks\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ion2s\Simpleblogaleks\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }
}
