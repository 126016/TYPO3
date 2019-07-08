<?php
namespace Ion2s\Simpleblogaleks\Controller;


use Ion2s\Simpleblogaleks\Domain\Model\Blog;
use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException as IllegalObjectTypeExceptionAlias;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use \Ion2s\Simpleblogaleks\Domain\Repository\BlogRepository;
use \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

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
 * BlogController
 */
class BlogController extends ActionController
{

    /**
     * @var \Ion2s\Simpleblogaleks\Domain\Repository\BlogRepository $blogRepository
     */
    protected $blogRepository = null;
    /**
     * @param \Ion2s\Simpleblogaleks\Domain\Repository\BlogRepository $blogRepository
     * @return void
     */
    public function injectBlogRepository(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * action list
     * @return void
     * @var Blog $blog
     */

    public function listAction() : void
    {
        $this->view->assign('blogs', $this->blogRepository->findAll());
    }

    /**
     * Generates Blogs
     * @param Blog $blog
     * @throws IllegalObjectTypeExceptionAlias
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     */
    public function addAction(Blog $blog) : void
    {
        $this->blogRepository->add($blog);
        $this->redirect('list');
    }

    /**
     * Add a title and description for the Blog
     * @param Blog $blog
     */
    public function addFormAction(Blog $blog = null) : void
    {
        $this->view->assign('blog', $blog);
    }

    /**
     * @param Blog $blog
     */
    public function showAction(Blog $blog) : void
    {
        $this->view->assign('blog', $blog);
    }

    /**
     * @param Blog $blog
     */
    public function updateFormAction(Blog $blog) : void
    {
        $this->view->assign('blog', $blog);
    }

    /**
     * @param Blog $blog
     * @throws IllegalObjectTypeExceptionAlias
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function updateAction(Blog $blog) : void
    {
        $this->blogRepository->update($blog);
        $this->redirect('list');
    }

    /**
     * @param Blog $blog
     * @throws IllegalObjectTypeExceptionAlias
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     */
    public function deleteAction(Blog $blog) : void
    {
        $this->blogRepository->remove($blog);
        $this->redirect('list');
    }

    /**
     * @param Blog $blog
     */
    public function deleteFormAction(Blog $blog) : void
    {
        $this->view->assign('blog', $blog);
    }
}
