<?php
declare(strict_types=1);

/**
 * Code helper hinting helper class for views, in the view add a type hint to $this and
 * you will get code hinting help for any view helpers you add methods for.
 *
 * @example $this DBlackborough\Zf3ViewHelpersCC\CustomAndZend
 *
 * @note The view helpers typically use invoke, in this class we add the phpDoc for the
 * invoke method as though it was the constructor.
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Copyright (c) 2017 G3D Development Limited
 * @license https://github.com/Dlayer/zf3-view-helpers-code-completion/blob/master/LICENSE
 */

namespace DBlackborough\Zf3ViewHelpersCC;

use DBlackborough\Zf3ViewHelpers;

use Zend\View\Helper\Asset;
use Zend\View\Helper\BasePath;
use Zend\View\Helper\Cycle;
use Zend\View\Helper\DeclareVars;
use Zend\View\Helper\Doctype;
use Zend\View\Helper\EscapeCss;
use Zend\View\Helper\EscapeHtmlAttr;
use Zend\View\Helper\EscapeHtml;
use Zend\View\Helper\EscapeJs;
use Zend\View\Helper\EscapeUrl;
use Zend\View\Helper\Gravatar;
use Zend\View\Helper\HeadLink;
use Zend\View\Helper\HeadMeta;
use Zend\View\Helper\HeadScript;
use Zend\View\Helper\HeadStyle;
use Zend\View\Helper\HeadTitle;
use Zend\View\Helper\HtmlFlash;
use Zend\View\Helper\HtmlList;
use Zend\View\Helper\HtmlObject;
use Zend\View\Helper\HtmlPage;
use Zend\View\Helper\HtmlQuicktime;
use Zend\View\Helper\HtmlTag;
use Zend\View\Helper\Identity;
use Zend\View\Helper\InlineScript;
use Zend\View\Helper\Json;
use Zend\View\Helper\Layout;
use Zend\View\Helper\PaginationControl;
use Zend\View\Helper\PartialLoop;
use Zend\View\Helper\Partial;
use Zend\View\Helper\Placeholder;
use Zend\View\Helper\RenderChildModel;
use Zend\View\Helper\RenderToPlaceholder;
use Zend\View\Helper\ServerUrl;
use Zend\View\Helper\Url;
use Zend\View\Helper\ViewModel;

/**
 * Code hinting helper for custom view helpers
 *
 * @package Application\View\Helper
 */
class CustomAndZend
{
    /**
     * Create a Bootstrap 4 badge
     *
     * @param string $label
     *
     * @return Zf3ViewHelpers\Bootstrap4Badge
     */
    public function bootstrap4Badge(string $label) : Zf3ViewHelpers\Bootstrap4Badge {}

    /**
     * Create a Bootstrap 4 button
     *
     * @param string $label
     *
     * @return Zf3ViewHelpers\Bootstrap4Button
     */
    public function bootstrap4Button(string $label) : Zf3ViewHelpers\Bootstrap4Button {}

    /**
     * Create a Bootstrap 4 jumbotron component
     *
     * @param string $heading
     * @param string $content
     *
     * @return Zf3ViewHelpers\Bootstrap4Jumbotron
     */
    public function bootstrap4Jumbotron(string $heading, string $content) : Zf3ViewHelpers\Bootstrap4Jumbotron {}

    /**
     * Create a Bootstrap 4 navbar, lite version
     *
     * @return Zf3ViewHelpers\Bootstrap4NavbarLite
     */
    public function bootstrap4NavbarLite() : Zf3ViewHelpers\Bootstrap4NavbarLite {}

    public function asset() : Asset {}
    public function basePath() : BasePath {}
    public function cycle() : Cycle {}
    public function declareVars() : DeclareVars {}
    public function doctype() : Doctype {}
    public function escapeCss() : EscapeCss {}
    public function escapeHtmlAttr() : EscapeHtmlAttr {}
    public function escapeHtml() : EscapeHtml {}
    public function escapeJs() : EscapeJs {}
    public function escapeUrl() : EscapeUrl {}
    public function gravatar() : Gravatar {}
    public function headLink() : HeadLink {}
    public function headMeta() : HeadMeta {}
    public function headScript() : HeadScript {}
    public function headStyle() : HeadStyle {}
    public function headTitle() : HeadTitle {}
    public function htmlFlash() : HtmlFlash {}
    public function htmlList() : HtmlList {}
    public function htmlObject() : HtmlObject {}
    public function htmlPage() : HtmlPage {}
    public function htmlQuicktime() : HtmlQuicktime {}
    public function HtmlTag() : HtmlTag {}
    public function identity() : Identity {}
    public function inlineScript() : InlineScript {}
    public function json() : Json {}
    public function layout() : Layout {}
    public function paginationControl() : PaginationControl {}
    public function partial() : Partial {}
    public function partialLoop() : PartialLoop {}
    public function placeholder() : Placeholder {}
    public function renderChildModel() : RenderChildModel {}
    public function renderToPlaceholder() : RenderToPlaceholder {}
    public function serverUrl() : ServerUrl {}
    public function url() : Url {}
    public function viewModel() : ViewModel {}
}
