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
 * @copyright Copyright (c) 2017 Dean Blackborough
 * @license https://github.com/Dlayer/zf3-view-helpers-code-completion/blob/master/LICENSE
 */

namespace DBlackborough\Zf3ViewHelpersCC;

use DBlackborough\Zf3ViewHelpers;

use Zend\View\Helper\Cycle;
use Zend\View\Helper\Doctype;
use Zend\View\Helper\Gravatar;
use Zend\View\Helper\HeadLink;
use Zend\View\Helper\HeadMeta;
use Zend\View\Helper\HeadScript;
use Zend\View\Helper\HeadStyle;
use Zend\View\Helper\HeadTitle;
use Zend\View\Helper\HtmlTag;
use Zend\View\Helper\InlineScript;
use Zend\View\Helper\Layout;
use Zend\View\Helper\Partial;
use Zend\View\Helper\Placeholder;
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

    /**
     * @param string $asset
     *
     * @return string
     */
    public function asset(string $asset) : string {}

    /**
     * Returns site's base path, or file with base path prepended.
     *
     * $file is appended to the base path for simplicity.
     *
     * @param  string|null $file

     * @return string
     */
    public function basePath($file) : string {}

    /**
     * Add elements to alternate
     *
     * @param  array $data
     * @param  string $name
     *
     * @return Cycle
     */
    public function cycle(array $data, string $name) : Cycle {}

    /**
     * Declare template vars to set default values and avoid notices when using strictVars
     *
     * Primarily for use when using {@link Zend\View\Variables::setStrictVars()},
     * this helper can be used to declare template variables that may or may
     * not already be set in the view object, as well as to set default values.
     * Arrays passed as arguments to the method will be used to set default
     * values; otherwise, if the variable does not exist, it is set to an empty
     * string.
     *
     * Usage:
     * <code>
     * $this->declareVars(
     *     'varName1',
     *     'varName2',
     *     array('varName3' => 'defaultValue',
     *           'varName4' => array()
     *     )
     * );
     * </code>
     *
     * @param string|array variable number of arguments, all string names of variables to test
     * @return void
     */
    public function declareVars() {}

    /**
     * Set or retrieve doctype
     *
     * @param  string $doctype
     *
     * @return Doctype
     */
    public function doctype(string $doctype) : Doctype {}

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     *
     * @return string
     */
    public function escapeCss(string $value) : string {}

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     *
     * @return string
     */
    public function escapeHtmlAttr(string $value) : string {}

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     *
     * @return string
     */
    public function escapeHtml(string $value) : string {}

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     *
     * @return string
     */
    public function escapeJs(string $value) : string {}

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     *
     * @return string
     */
    public function escapeUrl(string $value) : string {}

    /**
     * Returns an avatar from gravatar's service.
     *
     * $options may include the following:
     * - 'img_size' int height of img to return
     * - 'default_img' string img to return if email address has not found
     * - 'rating' string rating parameter for avatar
     * - 'secure' bool load from the SSL or Non-SSL location
     *
     * @see    http://pl.gravatar.com/site/implement/url
     * @see    http://pl.gravatar.com/site/implement/url More information about gravatar's service.
     * @param  string|null $email   Email address.
     * @param  null|array  $options Options
     * @param  array       $attribs Attributes for image tag (title, alt etc.)
     * @return Gravatar
     */
    public function gravatar($email, $options, $attribs) : Gravatar {}

    /**
     * Proxy to __invoke()
     *
     * Allows calling $helper->headLink(), but, more importantly, chaining calls
     * like ->appendStylesheet()->headLink().
     *
     * @param  array  $attributes
     * @param  string $placement
     *
     * @return HeadLink
     */
    public function headLink(array $attributes, string $placement) : HeadLink {}

    /**
     * Retrieve object instance; optionally add meta tag
     *
     * @param  string $content
     * @param  string $keyValue
     * @param  string $keyType
     * @param  array  $modifiers
     * @param  string $placement
     *
     * @return HeadMeta
     */
    public function headMeta(string $content, string $keyValue, string $keyType, array $modifiers, string $placement) : HeadMeta {}

    /**
     * Return headScript object
     *
     * Returns headScript helper object; optionally, allows specifying a script
     * or script file to include.
     *
     * @param  string $mode      Script or file
     * @param  string $spec      Script/url
     * @param  string $placement Append, prepend, or set
     * @param  array  $attrs     Array of script attributes
     * @param  string $type      Script type and/or array of script attributes
     *
     * @return HeadScript
     */
    public function headScript(string $mode, string $spec, string $placement, array $attrs, string $type) : HeadScript {}

    /**
     * Return headStyle object
     *
     * Returns headStyle helper object; optionally, allows specifying
     *
     * @param  string       $content    Stylesheet contents
     * @param  string       $placement  Append, prepend, or set
     * @param  string|array $attributes Optional attributes to utilize
     *
     * @return HeadStyle
     */
    public function headStyle(string $content, string $placement, $attributes) : HeadStyle {}

    /**
     * Retrieve placeholder for title element and optionally set state
     *
     * @param  string $title
     * @param  string $setType
     *
     * @return HeadTitle
     */
    public function headTitle(string $title, string $setType) : HeadTitle {}

    /**
     * Output a flash movie object tag
     *
     * @param  string $data    The flash file
     * @param  array  $attribs Attribs for the object tag
     * @param  array  $params  Params for in the object tag
     * @param  string $content Alternative content
     *
     * @return string
     */
    public function htmlFlash(string $data, array $attribs, array $params, string $content) : string {}

    /**
     * Generates a 'List' element.
     *
     * @param  array $items   Array with the elements of the list
     * @param  bool  $ordered Specifies ordered/unordered list; default unordered
     * @param  array $attribs Attributes for the ol/ul tag.
     * @param  bool  $escape  Escape the items.
     *
     * @return string The list XHTML.
     */
    public function htmlList(array $items, bool $ordered, array $attribs, bool $escape) : string {}

    /**
     * Output an object set
     *
     * @param  string $data    The data file
     * @param  string $type    Data file type
     * @param  array  $attribs Attribs for the object tag
     * @param  array  $params  Params for in the object tag
     * @param  string $content Alternative content for object
     *
     * @return string
     */
    public function htmlObject(string $data, string $type, array $attribs, array $params, string $content) : string {}

    /**
     * Output a html object tag
     *
     * @param  string $data    The html url
     * @param  array  $attribs Attribs for the object tag
     * @param  array  $params  Params for in the object tag
     * @param  string $content Alternative content
     *
     * @return string
     */
    public function htmlPage(string $data, array $attribs, array $params, string $content) : string {}

    /**
     * Output a quicktime movie object tag
     *
     * @param  string $data    The quicktime file
     * @param  array  $attribs Attribs for the object tag
     * @param  array  $params  Params for in the object tag
     * @param  string $content Alternative content
     *
     * @return string
     */
    public function htmlQuicktime(string $data, array $attribs, array $params, string $content) : string {}

    /**
     * Retrieve object instance; optionally add attributes.
     *
     * @param array $attribs
     *
     * @return HtmlTag
     */
    public function HtmlTag(array $attribs) : HtmlTag {}

    /**
     * Retrieve the current identity, if any.
     *
     * If none available, returns null.
     *
     * @return mixed|null
     */
    public function identity() {}

    /**
     * Return InlineScript object
     *
     * Returns InlineScript helper object; optionally, allows specifying a
     * script or script file to include.
     *
     * @param  string $mode      Script or file
     * @param  string $spec      Script/url
     * @param  string $placement Append, prepend, or set
     * @param  array  $attrs     Array of script attributes
     * @param  string $type      Script type and/or array of script attributes
     *
     * @return InlineScript
     */
    public function inlineScript(string $mode, string $spec, string $placement, array $attrs, string $type) : InlineScript {}

    /**
     * Encode data as JSON and set response header
     *
     * @param  mixed $data
     * @param  array $jsonOptions Options to pass to JsonFormatter::encode()
     *
     * @return string|void
     */
    public function json(mixed $data, array $jsonOptions) : string {}

    /**
     * Set layout template or retrieve "layout" view model
     *
     * If no arguments are given, grabs the "root" or "layout" view model.
     * Otherwise, attempts to set the template for that view model.
     *
     * @param  null|string $template
     *
     * @return Layout
     */
    public function layout($template) : Layout {}

    /**
     * Render the provided pages.  This checks if $view->paginator is set and,
     * if so, uses that.  Also, if no scrolling style or partial are specified,
     * the defaults will be used (if set).
     *
     * @param  Paginator\Paginator $paginator      (Optional)
     * @param  string              $scrollingStyle (Optional) Scrolling style
     * @param  string              $partial        (Optional) View partial
     * @param  array|string        $params         (Optional) params to pass to the partial

     * @return string
     */
    public function paginationControl($paginator, $scrollingStyle, $partial, $params) : string {}

    /**
     * Renders a template fragment within a variable scope distinct from the
     * calling View object. It proxies to view's render function
     *
     * @param  string|ModelInterface $name   Name of view script, or a view model
     * @param  array|object          $values Variables to populate in the view

     * @return string|Partial
     */
    public function partial($name, $values) {}

    /**
     * Renders a template fragment within a variable scope distinct from the
     * calling View object.
     *
     * If no arguments are provided, returns object instance.
     *
     * @param  string $name   Name of view script
     * @param  array  $values Variables to populate in the view

     * @return string
     */
    public function partialLoop(string $name, array $values) : string {}

    /**
     * Placeholder helper
     *
     * @param  string $name
     *
     * @return Placeholder\Container\AbstractContainer
     */
    public function placeholder(string $name) : Placeholder\Container\AbstractContainer {}

    /**
     * Invoke as a function
     *
     * Proxies to {render()}.
     *
     * @param  string $child
     *
     * @return string
     */
    public function renderChildModel(string $child) : string {}

    /**
     * Renders a template and stores the rendered output as a placeholder
     * variable for later use.
     *
     * @param string|ModelInterface $script      The template script to render
     * @param string                $placeholder The placeholder variable name in which to store the rendered output
     *
     * @return void
     */
    public function renderToPlaceholder($script, $placeholder) {}

    /**
     * View helper entry point:
     * Returns the current host's URL like http://site.com
     *
     * @param  string|bool $requestUri  [optional] if true, the request URI
     *                                     found in $_SERVER will be appended
     *                                     as a path. If a string is given, it
     *                                     will be appended as a path. Default
     *                                     is to not append any path.
     * @return string
     */
    public function serverUrl($requestUri) : string {}

    /**
     * Generates a url given the name of a route.
     *
     * @see Zend\Mvc\Router\RouteInterface::assemble()
     * @see Zend\Router\RouteInterface::assemble()
     * @param  string $name Name of the route
     * @param  array $params Parameters for the link
     * @param  array|Traversable $options Options for the route
     * @param  bool $reuseMatchedParams Whether to reuse matched parameters
     *
     * @return string Url For the link href attribute
     */
    public function url(string $name, array $params, $options, $reuseMatchedParams) : string {}

    public function viewModel() : ViewModel {}
}
