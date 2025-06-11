<section class="contato bg-gray-50 py-20 px-6">
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-10 animate__animated animate__fadeInUp">
    
    <h2 class="text-3xl font-extrabold text-[#0a1e3f] mb-8 text-center">
      Faça um orçamento
    </h2>

    <form
      id="formContato"
      action="https://formsubmit.co/gangmemberg0dhax@gmail.com"
      method="POST"
      class="space-y-6"
      novalidate
    >
      <input type="hidden" name="_honey" style="display:none" />
      <input type="hidden" name="_captcha" value="false" />

      <div>
        <label for="nameContato" class="block text-gray-700 font-semibold mb-2">Nome *</label>
        <input
          id="nameContato"
          name="nome"
          type="text"
          placeholder="Seu nome completo"
          required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition cursor-text"
        />
      </div>

      <div>
        <label for="telContato" class="block text-gray-700 font-semibold mb-2">Telefone *</label>
        <input
          id="telContato"
          name="telefone"
          type="tel"
          placeholder="(11) 11111-1111"
          required
          maxlength="15"
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition cursor-text"
        />
      </div>

      <div>
        <label for="mailContato" class="block text-gray-700 font-semibold mb-2">E-mail *</label>
        <input
          id="mailContato"
          name="email"
          type="email"
          placeholder="seu@email.com"
          required
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition cursor-text"
        />
      </div>

      <div>
        <label for="menContato" class="block text-gray-700 font-semibold mb-2">Mensagem</label>
        <textarea
          id="menContato"
          name="mensagem"
          rows="5"
          placeholder="Escreva sua mensagem aqui..."
          class="w-full border border-gray-300 rounded-md px-4 py-3 text-gray-900 placeholder-gray-400 resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 transition cursor-text"
        ></textarea>
      </div>

      <button
        type="submit"
        id="btnEnviarEmail"
        class="w-full bg-[#0a1e3f] text-yellow-400 font-semibold py-4 rounded-md shadow-md hover:bg-[#09212f] transition-colors duration-300 cursor-pointer flex justify-center items-center space-x-3"
      >
        <span>Enviar mensagem</span>
        <svg
          id="btnSpinner"
          class="w-5 h-5 text-yellow-400 animate-spin hidden"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
        >
          <circle
            class="opacity-25"
            cx="12"
            cy="12"
            r="10"
            stroke="currentColor"
            stroke-width="4"
          ></circle>
          <path
            class="opacity-75"
            fill="currentColor"
            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
          ></path>
        </svg>
      </button>
    </form>
  </div>

  <script>
    // Máscara simples para telefone (formato brasileiro)
    const telInput = document.getElementById('telContato');
    telInput.addEventListener('input', (e) => {
      let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não é número
      if (value.length > 11) value = value.slice(0, 11);

      let formatted = '';

      if (value.length > 0) formatted += '(';
      if (value.length > 2) formatted += value.substring(0, 2) + ') ';
      else formatted += value;

      if (value.length > 6) {
        formatted += value.substring(2, 7) + '-';
        formatted += value.substring(7, 11);
      } else if (value.length > 2) {
        formatted += value.substring(2);
      }

      e.target.value = formatted;
    });

    const form = document.getElementById('formContato');
    const btnEnviar = document.getElementById('btnEnviarEmail');
    const spinner = document.getElementById('btnSpinner');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Validação customizada mínima (HTML já cuida da básica)
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      // Desativa botão e mostra spinner
      btnEnviar.disabled = true;
      spinner.classList.remove('hidden');

      const formData = new FormData(form);

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: { 'Accept': 'application/json' },
        });

        if (response.ok) {
          alert('Mensagem enviada com sucesso! Obrigado pelo contato.');
          form.reset();
        } else {
          alert('Erro ao enviar a mensagem. Tente novamente mais tarde.');
        }
      } catch (error) {
        alert('Erro ao enviar a mensagem. Verifique sua conexão e tente novamente.');
      } finally {
        btnEnviar.disabled = false;
        spinner.classList.add('hidden');
      }
    });
  </script>
</section>
