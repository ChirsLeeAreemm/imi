<?php

namespace Imi\Server\Http\Message\Proxy;

use Imi\Bean\Annotation\Bean;
use Imi\RequestContextProxy\Annotation\RequestContextProxy;
use Imi\RequestContextProxy\BaseRequestContextProxy;

/**
 * @Bean(name="HttpResponseProxy")
 * @RequestContextProxy(class="Imi\Server\Http\Message\Contract\IHttpResponse", name="response")
 *
 * @method \Imi\Server\Http\Message\Contract\IHttpResponse redirect(string $url, int $status = 302)
 * @method static                                          \Imi\Server\Http\Message\Contract\IHttpResponse redirect(string $url, int $status = 302)
 * @method \Imi\Server\Http\Message\Contract\IHttpResponse send()
 * @method static                                          \Imi\Server\Http\Message\Contract\IHttpResponse send()
 * @method \Imi\Server\Http\Message\Contract\IHttpResponse sendFile(string $filename, int $offset = 0, int $length = 0)
 * @method static                                          \Imi\Server\Http\Message\Contract\IHttpResponse sendFile(string $filename, int $offset = 0, int $length = 0)
 * @method bool                                            isEnded()
 * @method static                                          bool isEnded()
 * @method static                                          setStatus(int $code, string $reasonPhrase = '')
 * @method static                                          static setStatus(int $code, string $reasonPhrase = '')
 * @method static                                          withCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method static                                          static withCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method static                                          setCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method static                                          static setCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false)
 * @method array                                           getCookieParams()
 * @method static                                          array getCookieParams()
 * @method mixed                                           getCookie(string $name, $default = NULL)
 * @method static                                          mixed getCookie(string $name, $default = NULL)
 * @method array                                           getTrailers()
 * @method static                                          array getTrailers()
 * @method bool                                            hasTrailer(string $name)
 * @method static                                          bool hasTrailer(string $name)
 * @method string|null                                     getTrailer(string $name)
 * @method static                                          string|null getTrailer(string $name)
 * @method static                                          withTrailer(string $name, string $value)
 * @method static                                          static withTrailer(string $name, string $value)
 * @method static                                          setTrailer(string $name, string $value)
 * @method static                                          static setTrailer(string $name, string $value)
 * @method int                                             getStatusCode()
 * @method static                                          int getStatusCode()
 * @method static                                          withStatus($code, $reasonPhrase = '')
 * @method static                                          static withStatus($code, $reasonPhrase = '')
 * @method string                                          getReasonPhrase()
 * @method static                                          string getReasonPhrase()
 * @method string                                          getProtocolVersion()
 * @method static                                          string getProtocolVersion()
 * @method static                                          withProtocolVersion($version)
 * @method static                                          static withProtocolVersion($version)
 * @method string[][]                                      getHeaders()
 * @method static                                          string[][] getHeaders()
 * @method bool                                            hasHeader($name)
 * @method static                                          bool hasHeader($name)
 * @method string[]                                        getHeader($name)
 * @method static                                          string[] getHeader($name)
 * @method string                                          getHeaderLine($name)
 * @method static                                          string getHeaderLine($name)
 * @method static                                          withHeader($name, $value)
 * @method static                                          static withHeader($name, $value)
 * @method static                                          withAddedHeader($name, $value)
 * @method static                                          static withAddedHeader($name, $value)
 * @method static                                          withoutHeader($name)
 * @method static                                          static withoutHeader($name)
 * @method StreamInterface                                 getBody()
 * @method static                                          StreamInterface getBody()
 * @method static                                          withBody(\Psr\Http\Message\StreamInterface $body)
 * @method static                                          static withBody(\Psr\Http\Message\StreamInterface $body)
 * @method static                                          setProtocolVersion(string $version)
 * @method static                                          static setProtocolVersion(string $version)
 * @method static                                          setHeader(string $name, $value)
 * @method static                                          static setHeader(string $name, $value)
 * @method static                                          addHeader(string $name, $value)
 * @method static                                          static addHeader(string $name, $value)
 * @method static                                          removeHeader(string $name)
 * @method static                                          static removeHeader(string $name)
 * @method static                                          setBody(\Psr\Http\Message\StreamInterface $body)
 * @method static                                          static setBody(\Psr\Http\Message\StreamInterface $body)
 */
class ResponseProxy extends BaseRequestContextProxy implements \Imi\Server\Http\Message\Contract\IHttpResponse
{
    /**
     * {@inheritDoc}
     */
    public function redirect(string $url, int $status = 302): \Imi\Server\Http\Message\Contract\IHttpResponse
    {
        return $this->__getProxyInstance()->redirect($url, $status);
    }

    /**
     * {@inheritDoc}
     */
    public function send(): \Imi\Server\Http\Message\Contract\IHttpResponse
    {
        return $this->__getProxyInstance()->send(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function sendFile(string $filename, int $offset = 0, int $length = 0): \Imi\Server\Http\Message\Contract\IHttpResponse
    {
        return $this->__getProxyInstance()->sendFile($filename, $offset, $length);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnded(): bool
    {
        return $this->__getProxyInstance()->isEnded(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $code, string $reasonPhrase = ''): \Imi\Util\Http\Contract\IResponse
    {
        return $this->__getProxyInstance()->setStatus($code, $reasonPhrase);
    }

    /**
     * {@inheritDoc}
     */
    public function withCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false): \Imi\Util\Http\Contract\IResponse
    {
        return $this->__getProxyInstance()->withCookie($key, $value, $expire, $path, $domain, $secure, $httponly);
    }

    /**
     * {@inheritDoc}
     */
    public function setCookie(string $key, string $value, int $expire = 0, string $path = '/', string $domain = '', bool $secure = false, bool $httponly = false): \Imi\Util\Http\Contract\IResponse
    {
        return $this->__getProxyInstance()->setCookie($key, $value, $expire, $path, $domain, $secure, $httponly);
    }

    /**
     * {@inheritDoc}
     */
    public function getCookieParams(): array
    {
        return $this->__getProxyInstance()->getCookieParams(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getCookie(string $name, $default = null)
    {
        return $this->__getProxyInstance()->getCookie($name, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrailers(): array
    {
        return $this->__getProxyInstance()->getTrailers(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function hasTrailer(string $name): bool
    {
        return $this->__getProxyInstance()->hasTrailer($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrailer(string $name): ?string
    {
        return $this->__getProxyInstance()->getTrailer($name);
    }

    /**
     * {@inheritDoc}
     */
    public function withTrailer(string $name, string $value): \Imi\Util\Http\Contract\IResponse
    {
        return $this->__getProxyInstance()->withTrailer($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function setTrailer(string $name, string $value): \Imi\Util\Http\Contract\IResponse
    {
        return $this->__getProxyInstance()->setTrailer($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCode()
    {
        return $this->__getProxyInstance()->getStatusCode(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function withStatus($code, $reasonPhrase = '')
    {
        return $this->__getProxyInstance()->withStatus($code, $reasonPhrase);
    }

    /**
     * {@inheritDoc}
     */
    public function getReasonPhrase()
    {
        return $this->__getProxyInstance()->getReasonPhrase(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getProtocolVersion()
    {
        return $this->__getProxyInstance()->getProtocolVersion(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function withProtocolVersion($version)
    {
        return $this->__getProxyInstance()->withProtocolVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaders()
    {
        return $this->__getProxyInstance()->getHeaders(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function hasHeader($name)
    {
        return $this->__getProxyInstance()->hasHeader($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeader($name)
    {
        return $this->__getProxyInstance()->getHeader($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaderLine($name)
    {
        return $this->__getProxyInstance()->getHeaderLine($name);
    }

    /**
     * {@inheritDoc}
     */
    public function withHeader($name, $value)
    {
        return $this->__getProxyInstance()->withHeader($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function withAddedHeader($name, $value)
    {
        return $this->__getProxyInstance()->withAddedHeader($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function withoutHeader($name)
    {
        return $this->__getProxyInstance()->withoutHeader($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {
        return $this->__getProxyInstance()->getBody(...\func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function withBody(\Psr\Http\Message\StreamInterface $body)
    {
        return $this->__getProxyInstance()->withBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function setProtocolVersion(string $version): \Imi\Util\Http\Contract\IMessage
    {
        return $this->__getProxyInstance()->setProtocolVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function setHeader(string $name, $value): \Imi\Util\Http\Contract\IMessage
    {
        return $this->__getProxyInstance()->setHeader($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function addHeader(string $name, $value): \Imi\Util\Http\Contract\IMessage
    {
        return $this->__getProxyInstance()->addHeader($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHeader(string $name): \Imi\Util\Http\Contract\IMessage
    {
        return $this->__getProxyInstance()->removeHeader($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setBody(\Psr\Http\Message\StreamInterface $body): \Imi\Util\Http\Contract\IMessage
    {
        return $this->__getProxyInstance()->setBody($body);
    }
}
