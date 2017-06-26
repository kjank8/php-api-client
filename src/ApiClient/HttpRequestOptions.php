<?php
namespace Bokbasen\ApiClient;

/**
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * HTTP request constants
 *
 * @license https://opensource.org/licenses/MIT
 */
class HttpRequestOptions
{

    const CONTENT_TYPE_HAL = 'application/hal+json';

    const CONTENT_TYPE_JSON = 'application/json';

    const CONTENT_TYPE_XML = 'application/xml';

    const CONTENT_TYPE_JPEG = 'image/jpeg';

    const CONTENT_TYPE_AUDIO_MPEG = 'audio/mpeg';

    const CONTENT_TYPE_PDF = 'application/pdf';

    const HTTP_METHOD_POST = 'POST';

    const HTTP_METHOD_PUT = 'PUT';

    const HTTP_METHOD_GET = 'GET';

    const HTTP_METHOD_PATCH = 'PATCH';
}